<?php

namespace RioBoatShow\Services;

use RioBoatShow\Repositories\InvitationRepository;
use RioBoatShow\Validators\InvitationValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Mail;

class InvitationService
{
    /**
     * @var InvitationRepository
     */
    protected $repository;

    /**
     * @var InvitationValidator
     */
    protected $validator;

    /**
     * InvitationService constructor.
     *
     * @param InvitationRepository $repository
     * @param InvitationValidator $validator
     */
    public function __construct(InvitationRepository $repository, InvitationValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Show all datas.
     *
     * @return mixed
     */
    public function show()
    {
        return $this->repository->all();
    }

    /**
     * Create data.
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

            Mail::send('layouts.email.private', $data, function ($message) {
                $message->from('webmaster@betonico.com.br', 'Rio Boat Show - Novo Cadastro');
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

    /**
     * Delete data.
     *
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}

