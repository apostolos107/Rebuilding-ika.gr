
<!DOCTYPE html>
<html lang="en"	xmlns:th="http://www.thymeleaf.org">
  <head>
    <title>Receipt</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  </head>

  <body>
      <hr/>
      <div class="container">
          <p style="size text-align:left;">
              <div style="font-size: medium">
                  <img style="height: 120px; width: 200px;"src="/IKA/img/ika.jpg" alt="IKA">
                  <span style="font-size: 200%; float:right;">Βεβαίωση Σύνταξης</span>
              </div>
          </p>
      </div>
      <br/>
      <hr/>
      <br/>
      <div class="container">
            <p th:inline="text">
                <div style="font-size: small">
                    Ημερομηνία [[${trans.timeStamp}]]
                </div>
            </p>
            <p th:inline="text">
                <th:block th:if="${trans.moneyPayed}>0">
                <div style="font-size: small">
                    Είδος Συναλλαγής : Κατάθεση Χρημάτων στον Ιστότοπο.
                </div>
                </th:block>
                <th:block th:unless="${trans.moneyPayed}>0">
                <div style="font-size: small">
                    Είδος Συναλλαγής : Ανάληψη Χρημάτων από τον Ιστότοπο.
                </div>
                </th:block>
            </p>
            <p th:inline="text">
                <div style="font-size: small">
                    Αριθμός Συναλλαγής : [[${trans.transactionId}]]
                </div>
            </p>
            <p th:inline="text">
                <div style="font-size: small">
                    Όνομα : [[${trans.organiser.surname}]] [[${trans.organiser.name}]]
                </div>
            </p>
            <p th:inline="text">
                <div style="font-size: small">
                    Αιτιολογία : [[${trans.message}]]
                </div>
            </p>
            <p th:inline="text">
                <div style="font-size: small">
                    Ποσό : [[${trans.moneyPayed/100}]]
                </div>
            </p>
      </div>
      <script>
        function Myprint() {
            window.print();
         }
      </script>
      <div class="container">
          <div class="pull-right">
              <button class="btn btn-primary btn-md" onclick="Myprint()">Εκτύπωση Απόδειξης</button>
          </div>
      </div>
  </body>
</html>
