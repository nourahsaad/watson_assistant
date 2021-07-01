<!DOCTYPE html>
<html>
<head>

<link rel ="stylesheet" type="text/css" href="rubt.css">

</head>
<body>

<h1>واجهه عرض لقاعدة ذراع الروبوت</h1>
 

   <button type="button" id="b1" >STOP</button>
   <br>
      <br>
   <br>
      <br>


   <button type="button" id="b2"  >FORWARD</button>
   <br>
      <br>

   <button type="button" id="b3" >BACKWARD</button>
   <br>
      <br>
   <br>
   <br>

   <button type="button" id="b4" >RIGHT</button>
   <br>   <br>

   <button type="button" id="b5" >LIFT</button>
   
   
   <script>
  window.watsonAssistantChatOptions = {
      integrationID: "6f6c372d-1270-4e62-8804-4ab6c6c9a00b", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "f544f26a-a218-439e-a15e-d3172e3149a2", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
   



</body>

</html>