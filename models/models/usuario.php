<?php
class Usuario {
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function guardar() {
        // Aquí iría la lógica de conexión a BD e INSERT
        return "Usuario {$this->nombre} registrado con éxito en la base de datos.";
    }
}
?>
