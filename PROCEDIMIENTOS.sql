--SP INSERTAR USUARIO

CREATE PROCEDURE InsertarUsuario
    @nombre NVARCHAR(100),
    @email NVARCHAR(100),
    @password NVARCHAR(255),
    @rol NVARCHAR(50)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Usuarios (nombre, email, password, rol)
        VALUES (@nombre, @email, @password, @rol);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

--SP PATROCINIO EVENTO
CREATE PROCEDURE InsertarPatrocinioEvento
    @id_evento INT,
    @id_patrocinador INT
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Patrocinio_Evento (id_evento, id_patrocinador)
        VALUES (@id_evento, @id_patrocinador);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

--SP DETALLES ENCUESTA

CREATE PROCEDURE InsertarDetalleEncuesta
    @id_encuesta INT,
    @pregunta NVARCHAR(255),
    @respuesta NVARCHAR(255)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Detalles_Encuesta (id_encuesta, pregunta, respuesta)
        VALUES (@id_encuesta, @pregunta, @respuesta);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

-- SP INSERTAR EVENTO
CREATE PROCEDURE InsertarEvento
    @nombre NVARCHAR(100),
    @descripcion NVARCHAR(255),
    @fecha DATE,
    @hora TIME,
    @lugar NVARCHAR(100),
    @tipo_evento NVARCHAR(50),
    @capacidad_maxima INT
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Eventos (nombre, descripcion, fecha, hora, lugar, tipo_evento, capacidad_maxima)
        VALUES (@nombre, @descripcion, @fecha, @hora, @lugar, @tipo_evento, @capacidad_maxima);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

-- SP INSERTAR PARTICIPANTE
CREATE PROCEDURE InsertarParticipante
    @nombre NVARCHAR(50),
    @apellidos NVARCHAR(50),
    @email NVARCHAR(100),
    @telefono NVARCHAR(20),
    @tipo_entrada NVARCHAR(50)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Participantes (nombre, apellidos, email, telefono, tipo_entrada)
        VALUES (@nombre, @apellidos, @email, @telefono, @tipo_entrada);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

-- SP INSERTAR ENTRADA
CREATE PROCEDURE InsertarEntrada
    @id_evento INT,
    @tipo_entrada NVARCHAR(50),
    @precio DECIMAL(10, 2),
    @disponibilidad INT,
    @beneficios NVARCHAR(255)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Entradas (id_evento, tipo_entrada, precio, disponibilidad, beneficios)
        VALUES (@id_evento, @tipo_entrada, @precio, @disponibilidad, @beneficios);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

-- SP INSERTAR LOCACION 
CREATE PROCEDURE InsertarLocacion
    @nombre NVARCHAR(100),
    @capacidad INT,
    @disponibilidad BIT,
    @equipamiento NVARCHAR(255)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Locaciones (nombre, capacidad, disponibilidad, equipamiento)
        VALUES (@nombre, @capacidad, @disponibilidad, @equipamiento);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO

-- SP INSERTAR PATROCINIO
CREATE PROCEDURE InsertarPatrocinador
    @nombre NVARCHAR(100),
    @descripcion NVARCHAR(255),
    @contacto NVARCHAR(100)
AS
BEGIN
    BEGIN TRANSACTION;
    BEGIN TRY
        INSERT INTO Patrocinadores (nombre, descripcion, contacto)
        VALUES (@nombre, @descripcion, @contacto);

        COMMIT TRANSACTION;
    END TRY
    BEGIN CATCH
        ROLLBACK TRANSACTION;
        THROW;
    END CATCH;
END;
GO