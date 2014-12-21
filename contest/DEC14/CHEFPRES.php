<?php require("../../includes/header.php"); ?><h1>Chef Under Pressure</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/CHEFPRES.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/CHEFPRES.pdf">Russian</a>.</h3>
<p>Chef is about to leave his home and live in a place called The Kingdom. There are <b>N</b> cities in this kingdom, and they are connected by bidirectional roads such that there is exactly one simple path between every 2 cities. The Kingdom is very unusual in that each road that connects two cities is exactly the same length.</p>
<p>The King has a monopoly over all commerce in the city and has very strict rules - he does not allow the citizens of a given city to sell more than one product. So in each city the desperate citizens sell exactly one product. There are <b>K</b> distinct products being sold overall in the Kingdom.</p>
<p>Let's number the cities with integers from <b>1</b> to <b>N</b>, and the products from <b>1</b> to <b>K</b>. The King lives in the capital city, city <b>B</b>. For each city <b>i</b>, the product that is sold in that city is denoted by <b>F(i)</b>.</p>
<p>After Chef has arrived and settled in, he plans to create a new recipe. This will require a certain product <b>P</b>, but this product may not be available in the city he will be living in - he will need to travel to that city to purchase it. Knowing the King's temper and remembering unpleasant incidents between him and the King in the past, Chef wants to stay as far as possible from the capital city (numbered <b>B</b>) during his travels.</p>
<p>Specifically, suppose Chef will be living in the city <b>A</b>. For each city <b>i</b>, let <b>G(i)</b> be the smallest distance between <b>B</b> and any city on the unique path connecting cities <b>A</b> and <b>i</b>. Chef wants to travel to the city <b>C</b> such that:</p>
<ul>
<li><b>F(C)</b>=<b>P</b>
</li><li>There is no other city <b>D</b> having <b>F(D)</b>=<b>P</b> and <b>G(D)</b> &gt; <b>G(C)</b>.</li>
</ul>

<p>If there are several cities with this property, Chef will choose the one with the smallest number. It is possible that <b>C</b> may equal <b>A</b>, in which case he does not have to travel at all.</p>
<p>Chef has not yet decided which city to live in, nor which recipe to create. You are required to answer several queries for him - if he lives in city <b>A</b>, and requires product <b>P</b>, which city should he travel to in order to purchase it?</p>
<h3>Input</h3>
<p>The first line of the input contains 2 integers: <b>N</b> and <b>K</b>. The next line contains the number <b>B</b> - the capital city of The Kingdom.</p>
<p>After this, there will be <b>N</b>-1 lines, each containing integers representing two cities, <b>X</b> and <b>Y</b> - indicating that there is a bidirectional road between cities <b>X</b> and <b>Y</b>.</p>
<p>The next <b>N</b> lines contain the description of cities: the <b>i</b>-th line contains a single integer <b>F(i)</b> - the product being sold in city <b>i</b>.</p>
<p>The next line will contain the number of queries, <b>Q</b>. The next <b>Q</b> lines contain 2 integers: <b>A</b> and <b>P</b>: the city Chef will be living in, and the product he requires.</p>
<h3>Output</h3>
<p>For each of the <b>Q</b> queries, output on separate lines the number of the city from which Chef should buy the given product from, if there is any. Otherwise output <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>K</b> ≤ 100</li>
</ul>
<h3>Subtask 1: [point 20]</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>Q</b> ≤ 100</li>
</ul>
<h3>Subtask 2:[point 80]</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>4</sup></li>
<li>1 ≤ <b>Q</b> ≤ 10<sup>4</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 4
8
3 2
2 1
1 8
8 6
8 7
7 4
4 5
3
2
3
4
1
1
4
4
8
2 1
2 2
2 3
2 4
8 1
8 2
8 3
8 4

<b>Output:</b>
5
2
3
4
5
2
1
4

</pre><h3>Explanation</h3>
<p>In the first query, Chef must purchase product 1 from either city 5 or city 6. In both cases Chef will pass directly through the capital while travelling from city 2, so he chooses the smallest city number, 5.</p>
<p>In the third query, the path from city 2 to city 3 is always at least 2 steps away from the capital. The path from city 2 to city 1 is less preferred, as the path comes within 1 step of the capital.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kamranmaharov ">kamranmaharov </a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>