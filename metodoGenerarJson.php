# TRANSFORMAR A JSON
    public function json($data)
    {
        $normalizers = array(new GetSetMethodNormalizer());
        $encoders =  array("json" => new JsonEncoder());
        $serializer = new Serializer($normalizers, $encoders);

        $json = $serializer->serialize($data, "json");
        $response = new Response();
        $response->setContent($json);
        $response->headers->set("Content-Type", "application/json");

        return $response;
    }