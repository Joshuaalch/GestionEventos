
USE SistemaGestionEventos;
GO

-- Tabla de Eventos
CREATE TABLE Eventos (
    id_evento INT PRIMARY KEY IDENTITY,
    nombre NVARCHAR(100) NOT NULL,
    descripcion NVARCHAR(255),
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    lugar NVARCHAR(100) NOT NULL,
    tipo_evento NVARCHAR(50),
    capacidad_maxima INT NOT NULL
);

-- Tabla de Participantes
CREATE TABLE Participantes (
    id_participante INT PRIMARY KEY IDENTITY,
    nombre NVARCHAR(50) NOT NULL,
    apellidos NVARCHAR(50) NOT NULL,
    email NVARCHAR(100) NOT NULL,
    telefono NVARCHAR(20),
    tipo_entrada NVARCHAR(50)
);

-- Tabla de Entradas
CREATE TABLE Entradas (
    id_entrada INT PRIMARY KEY IDENTITY,
    id_evento INT NOT NULL,
    tipo_entrada NVARCHAR(50) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    disponibilidad INT NOT NULL,
    beneficios NVARCHAR(255),
    CONSTRAINT FK_Entradas_Eventos FOREIGN KEY (id_evento) REFERENCES Eventos(id_evento)
);

-- Tabla de Locaciones
CREATE TABLE Locaciones (
    id_locacion INT PRIMARY KEY IDENTITY,
    nombre NVARCHAR(100) NOT NULL,
    capacidad INT NOT NULL,
    disponibilidad BIT NOT NULL,
    equipamiento NVARCHAR(255)
);

-- Tabla de Patrocinadores
CREATE TABLE Patrocinadores (
    id_patrocinador INT PRIMARY KEY IDENTITY,
    nombre NVARCHAR(100) NOT NULL,
    descripcion NVARCHAR(255),
    contacto NVARCHAR(100)
);

-- Tabla de Asistencia
CREATE TABLE Asistencia (
    id_asistencia INT PRIMARY KEY IDENTITY,
    id_evento INT NOT NULL,
    id_participante INT NOT NULL,
    CONSTRAINT FK_Asistencia_Eventos FOREIGN KEY (id_evento) REFERENCES Eventos(id_evento),
    CONSTRAINT FK_Asistencia_Participantes FOREIGN KEY (id_participante) REFERENCES Participantes(id_participante)
);

-- Tabla de Encuestas
CREATE TABLE Encuestas (
    id_encuesta INT PRIMARY KEY IDENTITY,
    id_evento INT NOT NULL,
    id_participante INT NOT NULL,
    satisfaccion INT CHECK (satisfaccion BETWEEN 1 AND 5),
    comentarios NVARCHAR(255),
    CONSTRAINT FK_Encuestas_Eventos FOREIGN KEY (id_evento) REFERENCES Eventos(id_evento),
    CONSTRAINT FK_Encuestas_Participantes FOREIGN KEY (id_participante) REFERENCES Participantes(id_participante)
);

-- Tabla de Patrocinio_Evento
CREATE TABLE Patrocinio_Evento (
    id_patrocinio INT PRIMARY KEY IDENTITY,
    id_evento INT NOT NULL,
    id_patrocinador INT NOT NULL,
    CONSTRAINT FK_Patrocinio_Evento_Eventos FOREIGN KEY (id_evento) REFERENCES Eventos(id_evento),
    CONSTRAINT FK_Patrocinio_Evento_Patrocinadores FOREIGN KEY (id_patrocinador) REFERENCES Patrocinadores(id_patrocinador)
);
--Tabla Usuarios
CREATE TABLE Usuarios (
    id_usuario INT PRIMARY KEY IDENTITY,
    nombre NVARCHAR(100) NOT NULL,
    email NVARCHAR(100) NOT NULL,
    password NVARCHAR(255) NOT NULL,
    rol NVARCHAR(50) NOT NULL
);
--Tabla detalles Encuesta
CREATE TABLE Detalles_Encuesta (
    id_detalle_encuesta INT PRIMARY KEY IDENTITY,
    id_encuesta INT NOT NULL,
    pregunta NVARCHAR(255) NOT NULL,
    respuesta NVARCHAR(255),
    CONSTRAINT FK_Detalles_Encuesta_Encuestas FOREIGN KEY (id_encuesta) REFERENCES Encuestas(id_encuesta)
);

--Tabla Notificaciones
CREATE TABLE Notificaciones (
    id_notificacion INT PRIMARY KEY IDENTITY,
    id_participante INT NOT NULL,
    mensaje NVARCHAR(255) NOT NULL,
    fecha_envio DATETIME NOT NULL,
    CONSTRAINT FK_Notificaciones_Participantes FOREIGN KEY (id_participante) REFERENCES Participantes(id_participante)
);


GO

