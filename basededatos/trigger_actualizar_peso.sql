CREATE TRIGGER `actualizar_peso` AFTER INSERT ON `crecimientos`
 FOR EACH ROW UPDATE animales set peso=New.peso_actual WHERE id = NEW.animal_id