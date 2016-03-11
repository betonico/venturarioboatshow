<?php

namespace RioBoatShow\Services;

use RioBoatShow\Repositories\InsertRepository;
use RioBoatShow\Validators\InsertValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Mail;

class InsertService
{
    /**
     * @var InsertRepository
     */
    protected $repository;

    /**
     * @var InsertValidator
     */
    protected $validator;

    /**
     * InsertService constructor.
     *
     * @param InsertRepository $repository
     * @param InsertValidator $validator
     */
    public function __construct(InsertRepository $repository, InsertValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Create register.
     *
     * @param array $data
     * @return array|mixed
     * @throws ValidatorException
     */
    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();

            $this->repository->create($data);

            Mail::send('email.private', $data, function ($message) {
                $message->from('deepak@betonico.com.br', 'Rio Boat Show - Novo Cadastro');
                $message->to('deepak@betonico.com.br')->subject('Rio Boat Show - Novo Cadastro');
            });

            return redirect('/')
                ->with('success', 'Cadastro efetuado com sucesso.');

        } catch(ValidatorException $e) {

            return redirect('/')
                ->with('errors', $e->getMessageBag())
                ->withInput();
        }
    }
}


