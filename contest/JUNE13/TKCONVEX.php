<?php require("../../includes/header.php"); ?><h1>Two k-Convex Polygons</h1><div class="content">

<p>
Given <b>n</b> sticks' lengths, determine whether there is a solution to choose <b>2k</b> out of them and use these <b>2k</b> sticks to form two <b>k</b>-convex polygons (non-degenerated), namely, two convex polygons each has exactly <b>k</b> sticks as its sides, and every adjacent sticks are not parallel.
</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>n</b> and <b>k</b>, denoting the number of sticks and the size of convex polygon we needed.</p>
<p>The second line contains <b>n</b> positive integers, denoting the lengths of sticks.</p>
<h3>Output</h3>
<p>Print "Yes" (without quotes) in the first line if exists a solution. Otherwise print "No" (without quotes) instead.</p>
<p>If such solution exists, you should output a plan in the second line. Print <b>2k</b> indexes (indexes start from <b>1</b>) of the sticks you chosen. First <b>k</b> sticks compose the first <b>k</b>-convex polygon. And the later <b>k</b> sticks form the second. If there are more than one solution, output any.</p>
<h3>Constraints</h3>
<ul>
<li><b>2k</b> ≤ <b>n</b> ≤ <b>1000</b></li>
<li><b>3</b> ≤ <b>k</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>length of each stick</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
6 3
1 1 1 2 2 2

<b>Output 1:</b>
Yes
1 2 3 4 5 6


<b>Input 2:</b>
6 3
1 2 3 100 200 300

<b>Output 2:</b>
No
</pre><h3>Explanation</h3>
<p><b>Example case 1:</b> 1 1 1 and 2 2 2 form two triangles.</p>
<p><b>Example case 2:</b> Please be careful that convex polygons must be non-degenerated.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-04-2013</td>
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