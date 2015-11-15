CREATE TRIGGER `actualizar_peso` AFTER INSERT ON `crecimientos`
 FOR EACH ROW UPDATE animales set peso=New.peso_actual WHERE id = NEW.animal_id





 CREATE TRIGGER `cambiar_estado_a_muerto` AFTER INSERT ON `carnes`
 FOR EACH ROW UPDATE animales set vivo=0 WHERE id = NEW.animal_id




CREATE TRIGGER `cambiar_estado_a_vivo` AFTER DELETE ON `carnes`
 FOR EACH ROW UPDATE animales set vivo=1 WHERE id = OLD.animal_id