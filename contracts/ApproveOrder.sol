pragma solidity 0.5.0;

contract ApproveOrder{

    struct Wholesalerorderdetails{
        uint manufacturer_id;
        uint wholesaler_id;
        uint count;
        string hash;
    }
    
    mapping (uint => Wholesalerorderdetails) public wholesaleorder;
  
    function addOrder(uint manufacturer_id, uint wholesaler_id, uint count, string hash, uint order_id) public {
        
        wholesaleorder[order_id] = Wholesalerorderdetails(manufacturer_id, wholesaler_id, count, hash);
    }
    
} 