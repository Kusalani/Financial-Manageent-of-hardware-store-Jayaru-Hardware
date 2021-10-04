@extends('task3s.layout')


@section('content')

    <script>
        let myAccount = {
            name: 'Jayaru Enterprises',
            income: 0,
            expense: 0
        }

        let addIncome = function(){
            console.log('add income');
            amount = parseInt(document.getElementById("amountAdded").value)
            myAccount.income+=amount
            updateUI()
        }

        let addExpense = function(){
            amount = parseInt(document.getElementById("amountAdded").value)
            myAccount.expense+=amount
            updateUI()
        }

        let resetAccount = function(){
            myAccount.income=0
            myAccount.expense=0
            updateUI()
        }

        let getAccountSummary = function(){
            //for ui logic
            return {
                balance: myAccount.income-myAccount.expense,
                income: myAccount.income,
                expense:myAccount.expense
            }
        }

        let printAccountSummary = function(account){
            //for developer
            let accountSummary = getAccountSummary(account)
            console.log(`
        Balance: ${accountSummary.balance}
        Income: ${accountSummary.income}
        Expense: ${accountSummary.expense}
    `)
        }

        // addExpense(account,100)
        // addIncome(account,200)
        // printAccountSummary(account)

        let updateUI = function() {
            //find app
            var app = document.getElementById("root")
            app.innerHTML = '';
            //make elements
            var h1 = document.createElement("h1")
            var text = document.createTextNode(`${myAccount.name}`)

            var balance = document.createElement("p")
            var balanceText = document.createTextNode(`Balance $${getAccountSummary(myAccount).balance}`)
            var expense = document.createElement("p")
            var expenseText = document.createTextNode(`Expense $${getAccountSummary(myAccount).expense}`)
            var income = document.createElement("p")
            var incomeText = document.createTextNode(`Income $${getAccountSummary(myAccount).income}`)
            //assign elements

            h1.appendChild(text)
            balance.appendChild(balanceText)
            income.appendChild(incomeText)
            expense.appendChild(expenseText)
            //append children
            app.appendChild(h1)
            app.appendChild(balance)
            app.appendChild(income)
            app.appendChild(expense)
        }
        updateUI()
    </script>










<div id="root" class="card">
</div>
<!--   Set Form Control to Add new Amounts -->
<div class="update">
    <form>

        <input class="form-control" type="number" name="amountAdded" id="amountAdded" placeholder="Enter Amount"/>
        <br>
        <div class="input-group">
            <input type="button" class="btn btn-outline-secondary" value="Add Income" onclick="addIncome()"/>
            <br>
            <br>
            <input type="button" class="btn btn-outline-secondary" value="Add Expense" onclick="addExpense()"/>
            <br>
            <br>
            <input type="button" value="Reset" class="btn btn-outline-secondary" onclick="resetAccount()"/>
        </div>
    </form>

</div>


@endsection


