<?php require("../../includes/header.php"); ?><h1>Spider Infiltration</h1><div class="content">
<p>The colony of ants is in big trouble! They have noticed that their food supplies are decreasing more than expected. They fear that some spiders might have infiltrated their colony. So they set about to confirm this the only way they know how : <i>by counting legs!</i> The queen ant counts the legs of all creatures present in the nest (apart from herself), and it totals to N. Now she wonders if it is possible to have the leg-count to be N with some spiders in the nest. Help her out.</p>
<h3>INPUT</h3>
<p>First line contains T, number of test cases.<br />Each of the next T lines contain a single integer N denoting the leg count that the queen ant obtained.</p>
<h3>OUTPUT</h3>
<p>Print T lines, i<sup>th</sup> line being answer to the i<sup>th</sup> test case. Print "YES" if it is possible, "NO" if it is not possible and "RIDICULOUS" if this leg-count can never be obtained. <b>Note</b> that ants have 6 legs and spiders have 8 legs.</p>
<h3>CONSTRAINTS</h3>
<p>1≤T≤10000<br />1≤N≤1000000</p>
<h3>SAMPLE INPUT</h3>
<pre>2<br />24<br />8</pre><h3>SAMPLE OUTPUT</h3>
<pre>YES<br />YES</pre><h3>EXPLANATION</h3>
<p>In the first sample case there are three spiders. Note that having 4 ants could have given the same leg-count, but question asks if it is possible to have spiders in the colony and still have this leg-count.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>