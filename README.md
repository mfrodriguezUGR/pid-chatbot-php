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