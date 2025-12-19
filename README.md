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

## Listado
<img width="1663" height="827" alt="cap_lista" src="https://github.com/user-attachments/assets/fea5961e-aedf-49ec-b3ae-534d7bc98690" />

## Formulario
<img width="1668" height="812" alt="cap_form" src="https://github.com/user-attachments/assets/f78059dd-cd15-4dec-9bee-2d356de137f4" />

## Vista Movil
<img width="401" height="581" alt="cap_movil" src="https://github.com/user-attachments/assets/b1213b95-41ef-483e-966b-6f2400c4620f" />


