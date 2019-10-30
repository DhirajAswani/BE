pragma solidity 0.5.8;

contract ApproveOrder{

    struct Wholesalerorderdetails{
        uint order_id;
        uint manufacturer_id;
        uint wholesaler_id;
        uint count;
        string hash;
    }
    
    mapping(uint => Wholesalerorderdetails) public wholesaleorder;
    uint public orders;
  
    function addOrder(uint order_id, uint manufacturer_id, uint wholesaler_id, uint count, string memory hash) public {
        orders++;
        wholesaleorder[orders] = Wholesalerorderdetails(order_id, manufacturer_id, wholesaler_id, count, hash);
    }
    
    
    
    
} 