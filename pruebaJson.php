public function pruebasAction(Request $request)
    {
        # Usar servicio
        $helpers = $this->get("app.helpers");

        # Probar el check token
        //$hash = $request->get("authorization", null);
        //$check = $helpers->checkToken($hash, true);
        //var_dump($check);
        //die();

        # Probar que el servicio está funcionando
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('BackendBundle:Usuario')->findAll();

        return $helpers->json($users);

    }