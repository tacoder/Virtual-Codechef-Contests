<?php require("../../includes/header.php"); ?><h1>Machine Gun</h1><div class="content">

<p>
Country X has a military zone framed as a grid of size MxN.<br />
Each point of the grid could be free, occupied by a machine gun or by a protector.
</p>
<p>
A machine gun at point (x, y) could automatically attack other guns at points (x-2, y-2), (x-2, y+2), (x+2, y-2) and (x+2, y+2).<br />
So we could not put two guns at points which make them destroy each others,<br />
unless there is a protector exactly in the middle.<br />
Eg.: We could put two guns at point (x, y) and (x+2, y+2) if and only if there is a protector at point (x+1, y+1).</p>
<p>
Given a map with some points which has been occupied by guns or protectors,<br />
your task is to find out the greatest number of guns to add to this map satisfying rules above.<br />
Note that we can put a machine gun at a free point, but we cannot remove any machine gun and protector, and we cannot add protectors.
</p>
<h3>Input</h3>
<p>There are several test cases, each formed as follows:</p>
<ul>
<li>The first line contains two positive integer M, N.</li>
<li>Next M lines, each contains N characters (no spaces) of {'F', 'G', 'P'} (ASCII: #70, #71, #80), the j-th character of the i-th line represents the point (i-1, j-1) on the map: 'F' is a free point, 'G' is occupied by a machine gun and 'P' is occupied by a protector.</li>
</ul>
<p>The input is ended with M = N = 0.</p>
<h3>Output</h3>
<p>For each test case, output on a line the greatest number of guns which can be added the given map.</p>
<h3>Constraints</h3>
<p>
1 ≤ M, N ≤ 700<br />
In the given map, any two machine guns do not attack each other.<br />
The sum of MxN does not exceed 490000 in one judge file.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 4
FPFP
PFPP
GFGF
5 3
FPF
FFF
FGG
PFP
FPF
0 0

<b>Output:</b>
3
6

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>15 sec</td>
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