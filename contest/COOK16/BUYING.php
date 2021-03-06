<?php require("../../includes/header.php"); ?><h1>Buying Candies</h1><div class="content">

<p>Emily is coming back from her two-week vacation at the other continent. But when Emily arrived at the airport, she realized that she had got no presents for her <b>K</b> friends! She still had some time before her flight, so she went for a walk around the airport hoping to find something suitable.</p>
<p>Soon Emily found a candy store and decided to buy some of her favorite candies for her friends. The store offers <b>N</b> packs of these candies, where pack <b>i</b> contains <b>A<sub>i</sub></b> candies.</p>
<p>Another reason Emily decided to buy candies is that she is fond of collecting empty candy packs from various parts of the world. That's why she decided to buy exactly <b>M</b> packs and present the friends with the candies and keep the packs for her collection. Emily would also like the total number of candies to be divisible by <b>K</b> so that an equal distribution of candies between friends is possible. Among all possible sets of packs, she would like to buy a set with the smallest possible total number of candies (money is the reason).</p>
<p>Your task is to help Emily, of course.</p>
<h3>Input</h3>

<p>The first line of the input file contains an integer <b>T</b> -- the number of test cases (no more than 5). <b>T</b> test cases follow, and each test case consists of two lines. The first of them contains three integers <b>N</b>, <b>M</b> and <b>K</b> (1 ≤ <b>M</b> ≤ <b>N</b> ≤ 50000, 1 ≤ <b>K</b> ≤ 20). The second of them contains <b>N</b> integers <b>A<sub>i</sub></b> (1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>).</p>
<h3>Output</h3>

<p>For each test case, output just one line containing the smallest possible total number of bought candies, or <b>-1</b> if it's impossible to buy exactly <b>M</b> packs so that the total number of candies is divisible by <b>K</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 3 5
1 2 3 4 5
6 3 4
9 5 1 7 3 7

<b>Output:</b>
10
-1

<b>Explanation:</b>
</pre>
<p>In the first test case, it's impossible to buy one candy per friend as three smallest packs contain 6 candies all together. Two candies per friend is possible though -- for example, if you buy packs with 1, 4 and 5 candies.</p>
<p>In the second test case, buying 3 packs implies buying an odd number of candies, which is impossible to distribute equally among 4 friends.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2011</td>
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