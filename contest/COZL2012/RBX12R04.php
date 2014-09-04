<?php require("../../includes/header.php"); ?><h1>Karthik in Loop</h1><div class="content">

<p>
PowerPoint Entertainment, a production house is releasing a movie - &ldquo;Karthik in Loop&rdquo; on the famous date of the leap year (29th Feb, 2012). Producer of the movie &ndash; S. Akhtar is very keen about the promotion before this release.</p>
<p>
Based on the past experience of movies, Akhtar makes a list of major crowd pulling cities in the country and a turnover of people expected in that city. The good thing with Akhtar is that he has lot of actors in the movie which definitely accounts for a large fan club. The number of fans that each actor can attract is different. But complement to this, there is a bad news for him. He has only a week (Sunday to Saturday) to promote his upcoming movie.</p>
<p>
Akhtar has following set of lists ready with him- list of cities, no. of people expected in that city on all 7 days and no. of fans that can be attracted by individual actors. So, the job now is to optimize the distribution of actors to the cities so that he can attract maximum people/fans during the promotion. There is no constraint on the no. of actors going to a particular city on a particular day as it depends on the expected no. of people expected in that city.</p>
<h3>Input</h3>
<p>
The first line contains an integer T with the number of test cases. Each test case will have 2 integers C and N representing the number of cities and the number of actors respectively. Then C lines follow each having 7 integers representing the number of people expected to be present at that city from Sunday to Saturday respectively. The next line will have N integers representing maximum fans each actor can attract per day.</p>
<p>
1&lt;=T&lt;=10</p>
<p>
1&lt;=C,N&lt;=100</p>
<p>
Number of fans that can be attracted by an actor and number of fans present in the city each day &lt;100</p>
<h3>Output</h3>
<p>
For each case print a line with the maximum number of fans the actors can attract together.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 4
2 4 6 5 9 8 1
3 1 2 2 1 4 6
4 5 3 2


<b>Output:</b>
54
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rishi_agarwal">rishi_agarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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