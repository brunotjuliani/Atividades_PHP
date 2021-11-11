<?php

namespace brunotjuliani\Model;

use \brunotjuliani\DB\Sql;
use \brunotjuliani\Model;
use \brunotjuliani\Model\Cart;


class OrderStatus extends Model {

    const EM_ABERTO = 1;
    const AGUARDANDO_PAGAMENTO = 2;
    const PAGO = 3;
    const ENTREGUE = 4;

}

?>