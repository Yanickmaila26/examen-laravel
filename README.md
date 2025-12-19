# Examen - Desarrollo en Plataformas

## Caso 21 - Hospedaje de Mascotas
## Estudiante:  Yanick Maila
## Fecha:  19/12/2025
## Paralelo:  3

---

## 1. Tabla  
### Nombre de la tabla:  Mascotas

### Campos:

| Campo | Tipo | ¿Obligatorio? |
|-------|------|----------------|
|  id     |  BigInt (Primary Key)    |       Sí         |
|   nombre_mascota    |   String (30)   |        Sí        |
|  tipo_animal     |  String (20)    |        Sí        |
|   nombre_dueño    |  String (50)    |      Sí          |
|   telefono    |  String (10)   |       Sí         |
|   fecha_salida    |  Date   |       No (Nullable)         |
|   instrucciones_especiales    |  Text   |       No (Nullable)         |
|   estado    |  Enum ['hospedado', 'recogido']   |       Si        |
|   created_at    |   Timestamp   |       Sí (Automático)         |
|   updated_at    |   Timestamp   |      Sí (Automático)          |

---

## 2. Tipos de Mascotas  
- Perro 
-	Gato 
-	Pájaro
- Hamster

## 3. ¿Se puede eliminar registros?  
**Respuesta:** Si

**Razón (1 línea):**  Si porque eliminarian los datos cuando ya ha pasado mucho tiempo que esa mascota no se ha hospedado, si no solo se le cambia entre estado Recogido o Hospedado conservando los datos y solo modificando las fechas de salida





