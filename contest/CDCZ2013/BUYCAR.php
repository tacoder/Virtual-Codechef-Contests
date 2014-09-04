<?php require("../../includes/header.php"); ?><h1>Walter wants to buy a car</h1><div class="content">
<p> </p>
<p>Walter white wants to buy a car, he does not care much about the type of car (sedan/hatchback/SUV) nor the power that the car has,<br />
all he cares about is how much the car will cost him, since he has loads of money , he wants to buy the most expensive car available in the market, but there is a catch!<br /><br /><br />
The tax percentages for each car vary and Walt wants to buy the most expensive car (including the tax costs), since there is a large selection of cars to choose from and he is busy 'cooking' for most of the time, he knocks on your door (because he is the one who <b>knocks</b>) one fine day and asks you to give him an efficient solution for his problem.<br /><br /><br />
If two cars have the same cost after adding the tax costs, Walt wants the car which has higher base price.<br /><br /></p>
<p><b>Note:</b> There is no case where the base price and interest rates of any two cars are the same
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br /><br />
Each line contains :<b>N</b> denoting the number of cars<br />
The next <b> N </b> lines contain</p>
<ul>
<li>string <b>S</b> denoting the car name</li>
<li>The cost of the car <b>C</b></li>
<li>The tax percentage to be paid for that particular car <b>i</b> </li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing the name of the car that you have to suggest for walter to buy</p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>T</b> ≤ 1000 <br /><br />
<b>1</b> ≤ <b>N</b> ≤ 100 <br /><br />
<b>1</b> ≤ <b>S</b> ≤ 20 <br /><br />
<b>100</b> ≤ <b>C</b> ≤ 1000000 <br /><br />
<b>0</b> ≤ <b>i</b> ≤ 100 <br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
Ferrari $100000 20%
Porsche $200000 10%
Lamborghini $300000 10%
2
BMW $20000 50%
Benz $15000 100%

<b>Output:</b>
Lamborghini
BMW
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Lamborghini is the costliest car among the given cars</p>
<p><b>Example case 2.</b> The two cars turn out to be the same cost after taxes, but the base price of BMW is more</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kushagra_om">kushagra_om</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-11-2013</td>
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