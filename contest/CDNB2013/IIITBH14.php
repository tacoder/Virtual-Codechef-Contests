<?php require("../../includes/header.php"); ?><h1>Problem 5</h1><div class="content">

<p> </p>
<p>You receive a credit C at a local store and would like to buy two items. You first walk through the store and create a list L of all available items. From this list you would like to buy two items that add up to the entire value of the credit. The solution you provide will consist of the two integers indicating the positions of the items in your list (smaller number first).</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input gives the number of cases, N. N test cases follow. For each test case there will be:</p>
<p>
One line containing the value C, the amount of credit you have at the store.</p>
<p>
One line containing the value I, the number of items in the store.</p>
<p>
One line containing a space separated list of I integers. Each integer P indicates the price of an item in the store.<br />
Each test case will have exactly one solution.
</p>
<h3>Output</h3>
<p>For each test case, output one line containing "Case #x: " followed by the indices of the two items whose price adds up to the store credit. The lower index should be output first.</p>
<h3>Limits</h3>
<ul>
<li>5 = C = 1000</li>
<li>1 = P = 1000</li>
</ul>
<h3>Small dataset</h3>
<ul>
<li>N = 10</li>
<li>3 = I = 100</li>
</ul>
<h3>Sample</h3>
<ul>
<li>Input </li>
<li>3</li>
<li>100</li>
<li>3</li>
<li>5 75 25</li>
<li>200</li>
<li>7</li>
<li>150 24 79 50 88 345 3</li>
<li>8</li>
<li>8</li>
<li>2 1 9 4 4 56 90 3</li>
<li>Output </li>
<li>Case #1: 2 3</li>
<li>Case #2: 1 4</li>
<li>Case #3: 4 5</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rggroups">rggroups</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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