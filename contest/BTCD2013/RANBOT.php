<?php require("../../includes/header.php"); ?><h1>Bot of Rancho</h1><div class="content">
<p> </p>
<p>Rancho is designing  a surveillance bot which has the capability to remember the coordinates of the given points and reply for the queries when asked.<br /><br />
The bot is placed at (0,0) with x axis towards right and y axis towards up.<br />
It has the capability to add, erase and get a point in the system :<br /><br />
add a b : Bot places a marker at the point (a,b). If the point is previously marked then ignores it.<br /><br />
erase a b : Bot deletes the marker from the (a,b).It will be made sure that the point (a,b) contains a marker at the time of this query.<br /><br />
get a b : The bot finds all the markers which are strictly up and strictly right of (a,b) and returns the leftmost one.In case there are more than one such markers then it returns the bottom-most one.<br /></p>
<p>Now its time to test the Bot.Given the queries, give the output returned by the Bot.<br />
 </p>
<h3>Input</h3>
<p>First Line contains N : Number of requests <br /><br />
followed by N lines containing the queries of the form of add/erase/get a b as defined earlier.
</p>
<h3>Output</h3>
<p>For each request of type ‘get a b‘ output ‘X Y’ : coordinates of the bottommost among the leftmost markers, lying strictly above and to the right of point (a,b). If there are no such points , output  -1.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>a , b</b> ≤ <b>10^9</b></li>
<li>a,b and N are integers</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10
add 1 2
add 2 4
add 1 1
add 2 4
erase 1 2
get 0 0
get 5 5
get 1 1
add 6 6
get 5 5

<b>Output:</b>
1 1
-1
2 4
6 6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-08-2013</td>
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