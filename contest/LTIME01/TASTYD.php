<?php require("../../includes/header.php"); ?><h1>Tasty Dishes</h1><div class="content">

<p>Chef's restaurant is the most attractive place to have dinner at. To understand why, let's have a look at a way customers do their orders:</p>
<p>There is only one list of <b>N</b> ingredients in the menu. Every ingredient has its beauty value that does not depend on its taste, but on the way it looks, which is expressed as a positive integer. To order a dish, the customer asks Chef to use all the ingredients from <b>L</b> to <b>R</b> (<b>L</b> is strictly less than <b>R</b>). Chef knows that the dish will be tasty and not only beautiful if the sum of its ingredients' beauty values is divisible by <b>K</b>. Chef does not want to use all the ingredients, so he always excludes one of them. Which one? - The least beautiful one! (in other words - which has the minimal beauty value). Now he wonders - how many segments (<b>L,R</b>) are there such that the sum of their beauty values will be divisible by <b>K</b> after excluding the least beautiful ingredient.</p>
<h3>Input:</h3>
<p>First line of the input consists of two positive integers - <b>N</b> and <b>K</b>. There are <b>N</b> space separated positive integers - beauty values of the ingredients.</p>
<h3>Output:</h3>
<p>Output should consist of a single integer - the answer for the problem. </p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>N</b> ≤ 2*10<sup>5</sup>
1 ≤ <b>K</b> ≤ 10<sup>9</sup>
1 ≤ <b>beauty value</b> ≤ 10<sup>9</sup>

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>4 2
1 2 3 4

</pre><p><b>Output:</b></p>
<pre>2

</pre><h3>Scoring:</h3>
<p>1 ≤ <b>N</b> ≤ 1000, this subtask is worth <b>21</b> point.</p>
<p> 1 ≤ <b>K</b> ≤ 100, this subtask is worth <b>39</b> points.</p>
<p> There are no special constrains for the remaining <b>40</b> points.</p>
<h3>Test generation details:</h3>
<p>Delivery and sorting of ingredients is quite random thing, so all the test cases will look as follows:</p>
<p> <b>N</b> and <b>K</b> are chosen by setter. An integer <b>M</b> is chosen by setter from interval <b>[100..10^9]</b>. Let <b>B[]</b> be the array of beauty values of ingredients. <b>B[i]</b> is chosen uniformly at random from an interval <b>[1..M]</b> for every <b>1</b> ≤ <b>i</b> ≤ <b>N</b>. After <b>B[]</b> is generated setter can choose a positive integer <b>R</b> and do <b>B[i]</b> = <b>B[i]</b>*<b>R</b> for every <b>1</b> ≤ <b>i</b> ≤ <b>N</b>. It's guaranteed that even after multiplying every <b>B[i]</b> won't exceed <b>10^9</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-06-2013</td>
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