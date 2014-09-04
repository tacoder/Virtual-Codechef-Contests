<?php require("../../includes/header.php"); ?><h1>Powerpuff girls Beebo</h1><div class="content">

<p>Professor Utonium created a pet called Beebo, but he told The Powerpuff Girls they must only feed him once, they fed him more than once which turning him into a giant monster and eating everything in Townsville then explode because he over ate, turning into a bunch of small cute little Beebo's for everyone. Professor Utonium discovered that all the Beebo’s can once again be made into one little Beebo by adding all of them. You have to add the Beebos such as:<br />
There are n piles of Beebos of sizes b1, b2, ..., bn lying on the floor in front of you.<br />
During one move you can take one pile of Beebo and add it to the other. As you add pile x to pile y, the size of pile y increases by the current size of pile x, and pile x stops existing. The cost of the adding operation equals the size of the added pile.<br />
Your task is to determine the minimum cost at which you can gather all Beebos in one pile.<br />
To add some challenge, the piles of Beebos built up conspiracy and decided that each pile will let you add to it not more than t times (after that it can only be added to another pile).<br />
Moreover, the piles of Beebos decided to puzzle you completely and told you q variants (not necessarily distinct) of what t might equal.<br />
Your task is to find the minimum cost for each of q variants.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows<br />
The first line of each test case contains integer n — the number of piles of Beebos. The second line contains n space-separated integers: b1, b2, ..., bn — the initial sizes of the piles of Beebos.</p>
<p>The third line contains integer q  -- the number of queries. The last line contains q space-separated integers t1, t2, ..., tq -- the values of number t for distinct queries. Note that numbers ti can repeat.</p>
<h3>Output</h3>
<p>Print q whitespace-separated integers -- the answers to the queries in the order, in which the queries are given in the input.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>105</b></li>
<li><b>1</b> ≤ <b>bi</b> ≤ <b>109</b></li>
<li><b>1</b> ≤ <b>q</b> ≤ <b>105</b></li>
<li><b>1</b> ≤ <b>ti</b> ≤ <b>105</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
2 3 4 1 1
2
2 3


<b>Output:</b>
9 8 
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2013</td>
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