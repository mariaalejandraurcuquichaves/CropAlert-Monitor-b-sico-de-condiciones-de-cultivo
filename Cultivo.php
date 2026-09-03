<?php
class Cultivo {
    public string $nombre;
    public string $tipo;
    private array $historialLecturas;

    public function __construct(string $nombre, string $tipo = "General") {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->historialLecturas = [];
    }

    public function agregarLectura(float $temperatura, float $humedad, string $estado): void {
        $this->historialLecturas[] = [
            'temperatura' => $temperatura,
            'humedad' => $humedad,
            'estado' => $estado,
            'fecha' => date("Y-m-d H:i:s")
        ];
    }

    public function obtenerHistorial(): array {
        return $this->historialLecturas;
    }
}
?>