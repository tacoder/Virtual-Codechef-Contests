<?php require("../../includes/header.php"); ?><h1>Artifacts</h1><div class="content">

<p>John is a notorious theaf, popular for stealing artifacts. Once, being afraid of getting caught, he went into the forest to hide the stolen artifacts. As the forest was big, it was hard to remember and track the exact location of the hidden artifacts, so at the time of hiding he placed a device along with it, which can continuously send signal. John kept a similar device for himself that was paired with the hidden device and it could only measure the strength of the signal emitted by the device that was hidden. After ensuring his safety, John went to the forest again to retrieve the artifacts. Assuming that forest is spread over a rectangular area, let us say that John enters the forest at point (0,0), which is one of the corner points of forest. Now John moves randomly at different locations and if John moves to a location that is closer to the object than the previous location, the device starts beeping at faster rate and at slower rate if he moves farther away. The rate of beeping remains same if the distance remains same.</p>
<h3>Input</h3>
<p>1st line contains number of test cases.</p>
<p>1st line of each test case consist of two integers x and y,separated by spaces, where (x,y) is coordinate diagonally opposite to (0,0).</p>
<p>2nd line of test case contains an integer N, which is followed by N lines each containing three values a,b,c separated by spaces where (a,b) = location of John and c=1 if closer than the previous distance, -1 if farther away than the previous distance, 0 if John is at the same distance. (This N lines are in sequence, according to the movement of John)</p>
<h3>Output</h3>
<p>For each test case, output the area in which the artifact may be present for each of the N lines mentioned above(rounded to 2 decimal points). Output zero if there is no such area.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
50 50
4
50.0 50.0 -1
50.0 0.0 1
0.0 0.0 -1
50.0 50.0 1

<b>Output:</b>
1250.00
937.50
312.50
0.00
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2011</td>
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