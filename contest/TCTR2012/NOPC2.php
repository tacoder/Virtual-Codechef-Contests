<?php require("../../includes/header.php"); ?><h1>Deploy the autobots</h1><div class="content">

<p>Autobots are instructed by Optimus Prime to mobilize in the form of a rectangular shape with each Autobot on each vertex of the rectangle region on a -&rdquo;deployment area&rdquo; (which may consist of one or more regions). This is done so as to take care of the inner rectangular area called &ldquo;region&rdquo;. However the rule states-&ldquo;no two regions may overlap&rdquo;.  You have been asked to remove some regions from the &ldquo;deployment area&rdquo; so the remaining regions do not obscure each other. To keep the disturbance to the minimum level, you should remove the minimum number of regions to achieve this goal. You may not remove a region and place it in another position; all regions you leave in &ldquo;deployment area&rdquo; must be in their original position.<br />
When you examined the &ldquo;deployment area&rdquo;, you noticed something very nice. Every region was placed on the deployment area by placing each autobot in the four corners. This was done in a very courteous manner since each autobot is guarding only the region it is holding.<br />
The reason Optimus Prime wants your help because you are good at taking down a single region without disturbing the rest, even if that region is obscured by many others.</p>
<h3>Input</h3>
<p>The first line consists of a single integer T indicating the number of test cases (about 25).<br />
Each test case consists begins with a single integer n indicating the number of regions. The next n lines consist of 4 integers x0, x1, y0, and y1 satisfying x0 &lt; x1 and y0 &lt; y1. This means the region covers all points (x,y) satisfying x0 &lt;= x &lt;= x1 and y0 &lt;= y &lt;= y1.<br />
As stated before hand, no corner of any region will intersect any other region anywhere. That is, if (x,y) is a corner point of one region and another region is described by x0, x1, y0, and y1, then we do not have x0 &lt;= x &lt;= x1 and y0 &lt;= y &lt;= y1.<br />
Bounds: 1 &lt;= n &lt;= 100 and each integer in a region description fits in a signed 32 bit integer.</p>
<h3>Output</h3>
<p>The output for each test case is a single line containing a single integer that is the maximum number of regions that can be left on the wall such that no two regions share a common point in the deployment area.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
0 4 0 4
1 3 1 2
2 3 1 3
3 4 1 3
<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>