$(function () {
  calc();

  $('#calc_plan').on('change', calc);
  $('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);
});

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : event.keyCode;
  if (charCode > 31 && (charCode < 45 || charCode > 57)) return false;
  return true;
}

function calc() {
  var plan = $('#calc_plan').val();
  var amount = $('#inv_amount').val();
  var percent;

  switch (plan) {
    case '1':
      switch (true) {
        case amount < 0.001:
          percent = 0;
          break;
        case amount > 5:
          percent = 0;
          break;
        case amount <= 5:
          percent = 110;
          break;

        default:
          percent = 0;
      }
      break;

    case '2':
      switch (true) {
        case amount < 5:
          percent = 0;
          break;
        case amount > 10:
          percent = 0;
          break;
        case amount <= 10:
          percent = 120;
          break;

        default:
          percent = 0;
      }
      break;
    case '3':
      switch (true) {
        case amount < 10:
          percent = 0;
          break;
        case amount > 25:
          percent = 0;
          break;
        case amount <= 25:
          percent = 150;
          break;

        default:
          percent = 0;
      }
      break;

    case '4':
      switch (true) {
        case amount < 25:
          percent = 0;
          break;
        case amount > 500:
          percent = 0;
          break;
        case amount <= 500:
          percent = 170;
          break;

        default:
          percent = 0;
      }
      break;

    case '5':
      switch (true) {
        case amount < 1001:
          percent = 0;
          break;
        case amount > 5000:
          percent = 0;
          break;
        case amount <= 5000:
          percent = 168;
          break;

        default:
          percent = 0;
      }
      break;

    case '6':
      switch (true) {
        case amount < 10:
          percent = 0;
          break;
        case amount > 30000:
          percent = 0;
          break;
        case amount <= 500:
          percent = 400;
          break;

        case amount <= 1000:
          percent = 500;
          break;

        case amount <= 2000:
          percent = 650;
          break;

        case amount <= 4000:
          percent = 850;
          break;

        case amount <= 8000:
          percent = 1200;
          break;

        case amount <= 30000:
          percent = 1800;
          break;

        default:
          percent = 0;
      }
      break;
  }

  $('#assign_per').text(percent + '%');
  var total = (amount * percent) / 100;
  $('#total_return').text('Éƒ ' + total.toFixed(8));

  if (total <= 0) {
    $('#net_profit').text('Éƒ ' + '0.00000000');
  } else {
    $('#net_profit').text('Éƒ ' + (total - amount).toFixed(8));
  }
}
