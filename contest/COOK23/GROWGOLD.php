<?php require("../../includes/header.php"); ?><h1>Golden Trees</h1><div class="content">

<p align="justify">
Long ago there was a beautiful kingdom in the island of Sona, the golden island, deep inside Africa.<br />
The trees in Sona island are made of gold and farmers are the richest group of people and are also heavy tax payers.</p>
<p align="justify">
As you know that price of gold increases every year, the minister of Sona has proposed the following tax policy.</p>
<ul>
<li>Pay <b>initTax</b> units of gold in the first year.
</li>
<li>In each of the next <b>slot1</b> years, pay one unit of gold more than the previous year.
</li>
<li>In each of the next <b>slot2</b> years, pay double the units of gold of the previous year.
</li>
<li>In each of the following years, pay number of gold units equal to the product of the number of units paid in <b>K</b> recent years.
</li>
</ul>
<p>
</p>
<p align="justify">
Given an integer <b>N</b>, find the number of units of gold to be paid in the <b>N</b><sup>th</sup> year. This result can be huge, so output the result modulo 100000007 (10<sup>8</sup>+7).</p>
<h3>Input</h3>

<p align="justify">First line has an integer <b>T</b> (number of test cases, 1 ≤ <b>T</b> ≤ 3). Each of the next <b>T</b> lines has 5 integers, <b>initTax slot1 slot2 K N</b>.<br />
1 ≤ <b>initTax</b>, <b>slot1</b>, <b>slot2</b> ≤ 50<br />
1 ≤ <b>K</b> ≤ <b>slot1</b> + <b>slot2</b> + 1<br />
1 ≤ <b>N</b> ≤ 1000000000 (10<sup>9</sup>)</p>
<h3>Output</h3>

<p align="justify">For each test case, output the tax in units of gold to be paid in the <b>N</b><sup>th</sup> year modulo 100000007  (10<sup>8</sup>+7).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 3 2 4 4
1 3 2 4 7
1 3 2 4 9

<b>Output:</b>
4
1536
18811834
</pre><p>
<b>Explanation:</b></p>
<p>Let tax[i] be the tax paid in i<sup>th</sup> year.</p>
<p>Init : tax[1] = 1</p>
<p>Next 3 years in slot1 (tax[i] = tax[i-1] + 1) : tax[2] = 2 , tax[3] = 3, tax[4] = 4</p>
<p>Next 2 years in slot2 (tax[i] = 2 * tax[i-1]) : tax[5] = 8 , tax[6] = 16</p>
<p>We have tax[1..6] = { 1, 2, 3, 4, 8, 16 }</p>
<p>tax[7] = tax[3] * tax[4] * tax[5] * tax[6] = 3 * 4 * 8 * 16 = 1536</p>
<p>similarly, tax[9] = tax[5] * tax[6] * tax[7] * tax[8].</p>
<p>Do not forget to print only the reminder of the result when divided by 100000007 (10<sup>8</sup>+7).</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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