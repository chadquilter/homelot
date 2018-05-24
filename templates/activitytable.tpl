<table border="0" width="100%">
  <tr>
    <thead>
    <th bgcolor="#d1d1d1">
      Name
    </th>
    <th bgcolor="#d1d1d1">
      Type
    </th>
    <th bgcolor="#d1d1d1">
      State
    </th>
    <th bgcolor="#d1d1d1">
      Alarm
    </th>
    <thead>
  </tr>
  {foreach from=$sensors key=myID item="sensor"}
    <tr bgcolor={if $sensor.alarm != 'Alert'}"#00ff00"{else}"FF0000"{/if}>
      <td>{$sensor.name|escape}</td>
      <td align="right">
        {$sensor.type}
      </td>
      <td>{$sensor.stateString|escape}</td>
      <td>{$sensor.alarm|escape}</td>
    </tr>
    {foreachelse}
      <tr>
        <td colspan="2">No records</td>
      </tr>
  {/foreach}
</table>
