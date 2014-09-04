<?php require("../../includes/header.php"); ?><h1>Pizza Delivery</h1><div class="content">

<p>
<b>Chef Po</b> had recently started home delivery service for pizzas. Po has only a single delivery boy that delivers the orders by riding his motorcycle. The motorcycle has an unlimited capacity of fuel tank. However, it is too old and can only ride 1 km for each 1 liter of fuel.</p>
<p>
There are <b>N</b> fuel stations near the restaurant. The <b>i-th</b> fuel station can fill a fuel tank exactly <b>K<sub>i</sub></b> liters; not more and not less. Filling a fuel tank with any amount of fuel in those stations tends to take a long time. Since the fuel stations are placed near the restaurant, no fuel is needed to go to a fuel station.</p>
<p>
Today Chef Po received <b>N</b> pizza orders, which is the same number of fuel stations fortuitously. The house of the person that ordered the <b>i-th</b> order is <b>H<sub>i</sub></b> km away from the restaurant. The delivery boy cannot deliver more than one order at a time. Therefore, after delivering an order, he must return back to the restaurant to take the next order.</p>
<p>
The delivery boy is an efficient person and thus he wants to fill the fuel tank with the exact amount of fuel required to deliver an order and return back. He also does not want to spends much time filling the tank, so he wants to minimize the number of times he fills the tank. Help him determine the minimum number of times he must fill the tank to deliver all orders.</p>
<h3>Input</h3>
<p>
The first line contains a single integer <b>T</b> denoting the number test cases. The description of <b>T</b> test cases follows. For each test case, the first line contains a single integer <b>N</b>. The second line contains <b>N</b> space-separated integers <b>H<sub>i</sub></b>. The third line contains <b>N</b> space-separated integers <b>K<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of times the delivery boy must fill the tank.</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 500<br />1 ≤ <b>N</b> ≤ 500<br />1 ≤ <b>H<sub>i</sub></b> ≤ 500<br />1 ≤ <b>K<sub>i</sub></b> ≤ 500<br />There is at least one way for completing the deliveries.<br />That is, the delivery boy  always can fill a fuel tank exactly 2 * <b>H<sub>i</sub></b> liters for 1 ≤ <b>i</b> ≤ <b>N</b>.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

1
4
1 2 3 4
1 4 5 3

<b>Output:</b>

7

</pre><h3>Explanation:</h3>
<p>
Here is one possible solution.
</p>
<p>
For the first order, the delivery boy must ride 1 + 1 = 2 km long. Fill the tank twice in the first fuel station.
</p>
<p>
For the second order, the delivery boy must ride 2 + 2 = 4 km long. Fill the tank once in the second fuel station.
</p>
<p>
For the third order, the delivery boy must ride 3 + 3 = 6 km long. Fill the tank twice in the fourth fuel station.
</p>
<p>
For the fourth order, the delivery boy must ride 4 + 4 = 8 km long. Fill the tank in the third and fourth fuel stations.
</p>
<p>
In total, the delivery boy must fill the tank 7 times. There is no way to fill the tank less than 7 times.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/khadarbasha">khadarbasha</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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