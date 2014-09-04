<?php require("../../includes/header.php"); ?><h1>Party Planning</h1><div class="content">

<p>Bilbo is planning his eleventy first birthday. Yes, he will soon be 111 years old. He has to decide whom all to invite to the Party. There are <b>N</b> families in the Shire (numbered <b>1</b> to <b>N</b>), and some families hate others. For example, the Bagginses of Bag End are on bad terms with the Sackville Bagginses. Each family declares which among the <b>N</b> families do they hate the most (we call this simply the "<b>enemy</b>" of the family).</p>
<p>Given the <b>N</b> enemies of each of the <b>N</b> families, Bilbo is interested in how many ways can he invite people to his party, such that he does not simultaneously invite some family as well as its enemy. Since the number may be large, output the answer modulo <b>1000000007</b>. Two ways are considered different if the set of families invited differ.</p>
<h3>Input</h3>
<p>The first line consists of the number of test-cases, <b>T</b>. </p>
<p> Each test case begins with a line having a single integer <b>N</b>. </p>
<p> This is followed by a line having <b>N</b> integers: denoting the enemies of each of the <b>N</b> families.</p>
<h3>Output</h3>
<p>For each test-case, output the number of ways modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).</p>
<h3>Constraints</h3>
<ul>
<li> <b>T</b> ≤ <b>10</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> No family is "enemies" with itself </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
2 3 4 1
3
2 1 2
2
2 1

<b>Output:</b>
7
5
3
</pre><h3>Explanation</h3>
<p>The first test case: {}, {1}, {2}, {3}, {4}, {1,3}, {2,4}</p>
<p>The second test case: {}, {1}, {2}, {3}, {1,3}</p>
<p>The third test case: {}, {1}, {2}</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pragrame">pragrame</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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