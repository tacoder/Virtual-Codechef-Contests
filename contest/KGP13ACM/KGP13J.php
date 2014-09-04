<?php require("../../includes/header.php"); ?><h1>Nomad Camp</h1><div class="content">
<p>A nomadic group wants to make camp inside a large forest having thousands of trees - all very tall, slick, and upright, with leaves and branches much above man-height. They will pitch a single tent, with the canvas of the tent conical in shape, and the tent has three long ropes fitted with the canvas-base that needs to be tied up with the bases of three trees so that the tree-bases form an acute-angled triangle (T). The circumcircle (C) of the points in T form the camp-base within which the nomads will set up all their other activities, so they naturally want to make their camp-base as large as possible and free of any other trees, although there may be some trees standing on the circumference of C. However, the nomads are all deadly against cutting any tree. Imagine that you are the nomad leader and have got the map of the forest. From this map, you find that the forest belongs to a planar land surface, and you also get the coordinates of all the tree bases. How can you compute the area of the largest camp-base that can be made? (Use pi=3.14 exactly)</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b>.</p>
<p>For each test case, the first line contains the number of trees <b>X</b> followed by <b>X</b> lines, each containing the <b>x</b> and <b>y</b>-coordinate (in that order) of one tree (both positive integers).</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the area of the largest camp base. The integer should be the floor of the area computed (for example, if the area computed is 123.7, output 123). If no camp can be made satisfying the given conditions, print -1 for the area.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p>0 &lt; <b>X</b> &#8804; 5000</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
1 1
10 1
10 5
5 4

<b>Output:</b>
Case 1: 27

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
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