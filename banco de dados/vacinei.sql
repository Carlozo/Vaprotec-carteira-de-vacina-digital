CREATE OR REPLACE FUNCTION logar(email text, senha text)  
RETURNS text AS $$

BEGIN
    IF email == SELECT email from usuarios && senha ==  THEN
        RETURN 'logado com sucesso!';
    ELSE
        RETURN 'erro ao logar!';
    END IF;
END;

$$ LANGUAGE plpgsql;

