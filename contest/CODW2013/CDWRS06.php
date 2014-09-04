<?php require("../../includes/header.php"); ?><h1>Lucky Bank</h1><div class="content">
<p>Lucky bank is very famous for it's schemes. Each year the Manager of the Lucky bank comes up with a new scheme. There are N customers each having a locker in the Lucky bank, i th customer has a locker with locker number i. Initially there was no money in their lockers.</p>
<p>It has been one year since Lucky bank is established. Yes, today is it's anniversary. So, The Manager of the bank wants to make the customers happy.  He comes up with a new scheme.</p>
<p>The scheme is as follows:<br />If the i th customer (having locker number: i ) deposits  M $ in his locker, Then all the lockers numbered 2*i ,3*i ,4*i........j*i where j*i &lt;=N    will also be deposited with M $. No wonder, who won't be happy with such a scheme?</p>
<p>There are two types of queries<br /><br />
TYPE1 Query:-<br /><br />
	UPDATE K M<br /><br />
	This means that customer with locker number K deposits M $ in his account.<br /><br />
TYPE2 Query:-<br /><br />
	ASK  K<br /><br />
	Customer K wants to know the money present in his locker (Customer K has locker number K).</p>
<h3>INPUT:-</h3>
<p>First line of the input contains a single integer N , No. of customers.Second line of the input contains a single integer Q, Number of queries.Then Q lines follow, each with a query of a TYPE1 or TYPE2</p>
<h3>OUTPUT:-</h3>
<p>Output the money in the locker of the customer in a new line if the query is of TYPE2</p>
<h3>Constraints:-</h3>
<p>1&lt;=k&lt;=n&lt;=100000<br /><br />
1&lt;=q&lt;=10000<br /><br />
1&lt;=m&lt;=100000</p>
<h3>Sample Input :</h3>
<p>10<br /><br />
5<br /><br />
UPDATE 1 10<br /><br />
UPDATE 3 3<br /><br />
UPDATE 2 10<br /><br />
ASK 6<br /><br />
ASK 10<br /></p>
<h3>Sample Output :</h3>
<p>23<br /><br />
20</p>
<h3>Explanation:-</h3>
<p>When customer with locker number 1 deposits 10$ in his locker, Then all the customers with locker numbers 2*1,3*1......will also get 10$.Similarly when, customer 3 deposits 3$ in his account, then all the customers with locker numbers 6,9 will also get 3$.Similarly with UPDATE 2 10.Hence ASK 6 gives 23 as the output.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/snehansu6631">snehansu6631</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>