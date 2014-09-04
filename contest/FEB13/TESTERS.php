<?php require("../../includes/header.php"); ?><h1>Vacation</h1><div class="content">

<p>Everybody knows that there are a lot of complicated problems on CodeChef and it’s quite difficult to solve them. However, very few people know that testing these problems is much more elaborate process than solving. Hosting Chef’s great contests would be impossible without his testers - Anton and Hiroto. The number of problems they solved and tested probably won’t fit in 32-bit integer. These guys do very big amount of work and of course they also need to have a rest. They are having vacation for the next ten days. Of course, they’ve chosen ChefLand as a place to go. </p>
<p>
There are <b>N</b> cities in ChefLand and every city is denoted by its integer number. Surprisingly these numbers are not to be distinct. Anton is fond of Math so he quickly counted <b>the sum of squares of all positive integer divisors</b> for every this number; let’s call this sum for number that denotes <b>ith</b> city <b>S(i)</b>. Hiroto considers city <b>i</b> to be beautiful if <b>S(i)</b> is <b>odd</b>, otherwise it is ugly for him. </p>
<p>
It’s important to mention that the cities of ChefLand are connected by <b>bidirectional</b> roads. It took Hiroto a couple of seconds to notice that there are exactly <b>N-1</b> roads and that it’s possible to reach every city from every other city by existing roads. </p>
<p>
Our testers want their vacation to consist of interesting trips. Formally trip is a path between two cities (Anton swears that there is an unique path between each pair of cities, so let’s trust him:)); the length of the trip is a number of cities it consists of. Furthermore, visiting of a single city is also a trip of length 1. The time of having any trip is equal to its length. Hiroto considers a trip to be interesting if the number of beautiful cities in it is not less than the number of ugly cities. </p>
<p>
Anton and Hiroto want to try every interesting trip. Since our testers are very smart and provident, they want to know the exact time it will take them to go through all the interesting trips. Note that if they had a trip from <b>A</b> to <b>B</b> then they are not interested in having trip from <b>B</b> to <b>A</b>.</p>
<h3>Input</h3>
<p>The first line contains single integer <b>N</b> – the number of cities in ChefLand. Then <b>N-1</b> lines follow – description of the roads. Each road is described by a pair of integers in <b>[1, N]</b> range. Then you are given <b>N</b> numbers in the next line. <b>Ith</b> of them is the number that denotes city <b>i</b>.</p>
<h3>Output</h3>
<p>The first and only line of the output should contain the total length of all the interesting trips.</p>
<p>
<h3>Constrains</h3>
</p>
<p><b>1 ≤ N ≤ 300000 (3*10<sup>5</sup>)</b></p>
<p>
<b>1 ≤ Number that denotes any city ≤ 1500000 (1.5*10<sup>6</sup>)</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2
1 3
3 1 1 

<b>Output:</b>
9
<p>
<h3>Explanation</h3>
Here we have <b>S(2)=S(3)=1</b> and <b>S(1)=10 (1 + 3<sup>2)</sup></b>, so the first city is ugly and other two are beautiful. 
(2, 2) – 1
(3, 3) – 1
(1, 2) – 2
(1, 3) – 2
(2, 3) – 3
1+1+2+2+3=9
The (1, 1) trip is not interesting. 

</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-12-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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