{* Smarty *}

{config_load file='config/sensor.conf'}
<html>
  <title>{#pageTitle#}</title>
  <body bgcolor="{#bodyBgColor#}">
    <div class="body-container">
      <h1>Home Sensor Activty Report:</h1>
      {include file="activitytable.tpl"}
    </div>
  </body>
</html>
