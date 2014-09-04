<?php require("../../includes/header.php"); ?><h1>Tom And Jerry</h1><div class="content">

<p>Tom has decided to catch Jerry for sure. To ensure this, he has brought along his friends from the alley into the house. Jerry, being aware of Tom&#8217;s plan, has ensured that Spike, the friendly bulldog, is patrolling the outside of the house. </p>
<p>
You have been provided a map of the house which specifies Jerry&#8217;s location by the single letter R as well as the location of the other cats (including Tom) marked by the letter C. Walls and other obstacles present in the house have been marked with a #. Empty areas have been marked with a *. </p>
<p>
Jerry will escape the clutches of the cats if he manages to reach any of the edge squares of the house that have been marked with a  *  . Jerry will be captured if he is unable to do so without being caught by a cat.<br/><br />
The following restrictions apply to their movements:
</br/></p>
<p><ul>
<li>Only 1 animal (Jerry or any of the cats) can move at a time.</li>
<li>Turns are given to each animal to move.</li>
<li>No animal can move again till all of the other animals have been given a chance to move.</li>
<li>Jerry is always given the first chance to move in a turn.</li>
<li>During a move, the animal may choose to stay still or move along any of the cardinal directions (North, South, East, West) provided that square is not blocked by an obstacle.</li>
<li>Jerry and the cats are not allowed to perform diagonal movements.</li>
<li>You can choose any suitable order for the movement of cats.</li>
<li>Assume that both Jerry and the Cats move optimally. (i.e. Jerry will always try to take that path which gives him the maximum chance of escaping the cats and the cats will always choose that path that enables them to capture Jerry) </li>
</ul>
</p>
<p><br/></br/></p>
<p>
You need to determine, given a map of the house, whether Jerry is able to escape the trap set by the cats. Display &#8220;Yes&#8221; if this is the case, otherwise, display &#8220;No&#8221;.</p>
<p>Note : There may be some maps on which there is no cat. </p>
<p><b>Input Format:</b></p>
<p>Line 1: N M &#8211; The dimensions of the map. (1 &lt;= N,M &lt;= 50) <br/><br />
Lines 2 to N: M space separated characters taken from the set {*, #, R, C} with only 1R present in the entire matrix.
</br/></p>
<p><b>Output Format:</b><br />
<br/></br/></p>
<p>
Line 1: Yes/No
</p>
<p><b>Sample Input:</b></p>
<pre style="font-family:monospace">
25 25
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * C * * * * * * * * * * * * *
* * * * # # # # # # # # # # # # # # # # # * * * *
* * * * * * * * * * * R * * * * * * * * * * * * *
* * # # # # # # # # # # # # # # # # # # # # * * *
* * * * * * * * * * * C * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * 
</pre><p><br/><br />
<br/><br />
<b>Sample Output</b><br/><br />
Yes</br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>