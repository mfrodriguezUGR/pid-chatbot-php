# URL para webhook

https://ai-telegram-bot-czhjfzh8cufehddr.westeurope-01.azurewebsites.net/telegram.php

# Creación del bot

-  Abre Telegram y busca @BotFather
- Inicial la conversación y lanza el comando /newbot
- Sigue las instrucciones, proprociona un nombre 'Bot de prueba para PID' y un id 'PidPruebasBot', tiene que acabar en Bot, no acepta guiones.
- Apunta el token en un lugar seguro.
- Modifica esta url y accede a ella https://api.telegram.org/botTU_BOT_TOKEN/setWebhook?url=TU_URL

Dónde TU_BOT_TOKEN es el dado por telegram y la url es la del fichero telegram.php, para la prueba 'https://ai-telegram-bot-czhjfzh8cufehddr.westeurope-01.azurewebsites.net/telegram.php'

Si todo va bien en el navegador aparece esto 

```
{"ok":true,"result":true,"description":"Webhook was set"}
```

# Probar el bot

- En telegram busca @id_bot con el id único del bot.
- Pulsar el botón Iniciar. Eso enviará un mensaje con el texto '/start'.
- Escribir algo y esperar la respuesta. Ahora mismo captura los datos que envía telegram del usuario y el mensaje y lo envía de vuelta.

Estos son los campos:

| Campo                   | Descripción |
|-------------------------|-------------|
| `update_id`            | ID único de la actualización recibida. Telegram lo usa para identificar cada mensaje o evento enviado al bot. |
| `message`              | Contiene toda la información sobre el mensaje enviado por el usuario. |
| `message.message_id`   | ID único del mensaje dentro del chat. |
| `message.from`         | Información del usuario que envió el mensaje. |
| `message.from.id`      | ID único del usuario en Telegram. |
| `message.from.is_bot`  | `false` → Indica que el remitente es una persona (si fuera `true`, sería un bot). |
| `message.from.first_name` | Nombre del usuario (`Borja` en este caso). |
| `message.from.username` | Nombre de usuario en Telegram (`mfdborja`). Puede no estar presente si el usuario no tiene un nombre de usuario configurado. |
| `message.from.language_code` | Código de idioma configurado por el usuario en Telegram (`es` para español). |
| `message.chat`         | Información sobre el chat en el que se recibió el mensaje. |
| `message.chat.id`      | ID del chat. Si es un chat privado, coincide con `from.id`. |
| `message.chat.first_name` | Nombre del usuario en el chat. |
| `message.chat.username` | Username del usuario en el chat (`mfdborja`). |
| `message.chat.type`    | Tipo de chat. Puede ser: `"private"` (chat individual), `"group"` (grupo normal), `"supergroup"` (grupo avanzado) o `"channel"` (canal de Telegram). |
| `message.date`         | Fecha y hora en que se envió el mensaje, en **timestamp Unix** (segundos desde 1 de enero de 1970). |
| `message.text`         | Texto del mensaje enviado (`"Hola"` en este caso). |

Para obtener el número de teléfono hay que solicitar el permiso explícito al usuario que lo podrá dar o no. Pero tenemos siempre el id único de telegram.