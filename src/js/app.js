App = {
  web3Provider: null,
  contracts: {},
  account: '0x0',


init: function() {
    return App.initWeb3();
  },

initWeb3: function() {
    // TODO: refactor conditional
    if (typeof web3 !== 'undefined') {
      // If a web3 instance is already provided by Meta Mask.
      App.web3Provider = web3.currentProvider;
      web3 = new Web3(web3.currentProvider);
    } else {
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545');
      web3 = new Web3(App.web3Provider);
    }
    return App.initContract();
  },
    
  redirect: function(){
    window.location.href = "http://localhost:3000/manufacturer/dashboard.html";  
  },



  initContract: function() {
      alert("ss");
//    $.getJSON("ApproveOrder.json", function(certificate) {
//      // Instantiate a new truffle contract from the artifact
//      App.contracts.ApproveOrder = TruffleContract(certificate);
//      // Connect provider to interact with contract
//      App.contracts.ApproveOrder.setProvider(App.web3Provider);
//
//      //App.listenForEvents();    
//
      return App.render();
//    });
  },







render: function() {
//    var electionInstance;
//    var loader = $("#loader");
//    var content = $("#content");
//
//    loader.show();
    //content.hide();
    
    
    
//    var sa = $("#warehouse");
//    sa.click(function(){
//       $("#warehouse").css("color","green"); 
//    });
    // Load account data
    // web3.eth.getAccounts().then(function (result){
    //   //return result[0]
    //   App.account=result[0]
    //   $("#accountAddress").html("Your Account: " + result[0]);
    //   });
    

      //web3.eth.getA
   
    
    try{
         web3.eth.getCoinbase(function(err, account) {
      if (err === null) {
        //var account = web3.eth.accounts[1];
        App.account = account;
          alert(account);
        //web3.eth.getAccounts(accounts => console.log(accounts[0])).
        $("#accountAddress").html("Your Account: " + account);
      }
    }).catch(function(error) {
      console.warn(error);
    });
    }finally{
//        return App.addO();   
    }
    
    
    
  },
    
    addO: function(){
        var url=$(location).attr("href");
    var urlarray=url.split("?");
    var splitmeagain=urlarray[1];
    var semifinalsplit=splitmeagain.split("&");
    var finalsplit=semifinalsplit[1].split("=");
    var number=finalsplit[1];
    var orderid=semifinalsplit[0].split("=");
    orderid=orderid[1];
    var quantity=semifinalsplit[1].split("=");
    quantity=quantity[1];
    if(orderid>0 && quantity>0){
        alert(">");
        
        App.contracts.ApproveOrder.deployed().then(function(instance){
            return instance.addOrder(orderid, 1, 4, quantity, "sasbsdfaj362neksj3bsbsafg", {from: App.account, gas:300000}).then(function(result){
                
            }).catch(function(err){
               console.log(err+"sassasasasasa"); 
            });
        });
    }
    },


 


};

$(function() {
  $(window).load(function() {
    App.init();
  });
});
