<?php require("../../includes/header.php"); ?><h1>Circle of towers</h1><div class="content">

<p>Two friends live in a small city. The city is built in the form of a circular road and skyscrapers surrounding the road. But one day the two friends quarreled with each other, and although they remained in the city, they decided to live in apartments located as far as possible from each other, or more precisely, so as to maximize the travel time between them. All the skyscrapers are arranged in a circle around the road (so you can travel in a cycle as follows: 1 &lt;-&gt; 2 &lt;-&gt; 3 &lt;-&gt; ... &lt;-&gt; n &lt;-&gt; 1), and the travel time between two neighbouring buildings is 1. The travel time between two adjacent floors of a skyscraper is also 1, and the friends can choose to live in any floor of the building, from the 0-th to the k-th, assuming that the skyscraper in question has k floors. Thus, the travel time from the j-th floor to ground level is j time units.</p>
<h3>Input</h3>
<p>First, 1≤n≤10<sup>6</sup>, the number of skyscrapers. The following numbers, 1≤h<sub>1</sub>≤10<sup>9</sup>,...1≤h<sub>n</sub>≤10<sup>9</sup>, are the heights of the buildings, given in clockwise order.</p>
<h3>Output</h3>
<p>Output exactly one number, the maximal possible travel time.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
4 1 2 3 4

<strong>Output:</strong>
8
<strong>Input:</strong>
10 1 7 4 3 2 9 2 3 4 5

<strong>Output:</strong>
20

</pre><p>
<b>Please note: the time limit for this problem is <em>extremely</em> strict!<br />
</b>
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-12-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>