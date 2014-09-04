<?php require("../../includes/header.php"); ?><h1>Protecting Sheep</h1><div class="content">

<p>Useless Fencing Inc. has recently scored a contract to create a fence around a bunch of sheep in light of recent wolf attacks. As implied by their name, Useless Fencing tries to use as little fencing material as possible.</p>
<p>In order to determine the location of each of the sheep, Useless Fencers has deployed a system consisting of laser range-finders. This has given them the location of each of the sheep, however because of errors inherent in the system, they only know that each of the sheep is inside a square of side 2 units. (Note that the orientation of all of these squares is identical, and the coordinate system has been selected so that each of the sides are parallel to one of the axes.)</p>
<p>The sheep are rather lazy (they never move), but none of them should be left outside the fence. Your task is to determine the minimum possible length of the fence.</p>
<h3>Input Format</h3>
<p>The first line contains a single integer p representing the number of sheep. This line is followed by p lines each containing two non-negative floats which correspond to the cartesian coordinates of each of the sheep.</p>
<h3>Output Format</h3>
<p>You should output a single line containing the length of the fence required. Your answer will be a floating point number, the judge will ignore FP rounding up to 10<sup>-6</sup>.</p>
<h3>Example</h3>
<p>Input:</p>
<pre><code>
5
0.0 0.0
0.0 1.0
1.0 0.0
1.0 1.0
0.5 0.5

</code></pre><p></p>
<p>Output:</p>
<pre><code>
12.0
</code></pre><p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/singh_sume">singh_sume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>9 sec</td>
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