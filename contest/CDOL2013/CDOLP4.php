<?php require("../../includes/header.php"); ?><h1>CSA Garden Snakes</h1><div class="content">

<p>
  CSA department has a very beautiful and lush green garden. So snakes like it very much.<br />
There are <b>N</b> snakes which are quite powerful and dangerous. They usually used to visit the garden.<br />
Today they all are in garden. You can think of garden as W*H block grid.(W- width, H- Height, top-left corner:(0,0) bottom-right corner:(W-1,H-1)) So each snake is at some block in the garden.<br />
  Other than these N snakes there is one little snake also. He also want to sit in the garden on some block.<br />
 But little snake has fear of all the snakes. So little snake want to sit far away from big snakes.<br />
If a big snake is sitting at (x,y) then small snake CAN'T sit in any of theses 13 location:<br/><br />
{(x,y-2),<br/><br />
(x-1,y-1),(x,y-1),(x+1,y-1),<br/><br />
(x-2,y),(x-1,y),(x,y),(x+1,y),(x+2,y),<br/><br />
(x-1,y+1),(x,y+1),(x+1,y+1),<br/><br />
(x,y+2)}<br/></br/></br/></br/></br/></br/></br/></p>
<p>As shown in diagram(diamond shape): S is the location of snake. And small snake don't want to sit at "S" and "#" points.<br />
<br/><br />
--#--<br/><br />
-###-<br/><br />
##S##<br/><br />
-###-<br/><br />
--#--<br/><br />
<br/></br/></br/></br/></br/></br/></br/></br/></p>
<p><br/>You are given W, H, N and the location of all N snakes. You have to find out at how many locations the small snake can sit in the garden.<br />
</br/></p>
<p><b>Note:</b><br/></br/></p>
<ul>
<li>The index is 0-based.</li>
<li>The big snakes don't have any problem in siting with each other or near to each other.</li>
</ul>
<h3>Input</h3>
<p>
First line will contain W,H and N separated by space.</p>
<p>Next N lines will contain two integers X and Y seperated by space which denotes the X,Y location of each snake.
</p>
<h3>Output</h3>
<p>
Output the number of locations at which the little snake can sit in the garden.
</p>
<h3>Input Constrain:</h3>
<pre>
1 &lt;= N &lt;= 10000
1 &lt;= W &lt;= 10<sup>8</sup> (100000000)
1 &lt;= H &lt;= 10<sup>8</sup> (100000000)
0 &lt;= X &lt;= W-1
0 &lt;= Y &lt;= H-1

</pre><h3>Example:</h3>
<pre>
<b>Input:</b>
6 6 3
2 2
3 3
4 4

<b>Output:</b>
15

</pre><p><b>Explanation:</b></p>
<p>
Create a boolean array of 6*6. Make all the entries as true. Now make entries in the range of snake 1's diamond as false.<br />
Then make the entries in the range of snake 2's and 3's diamond as false. The remaining true entry will be the locations where small snake can sit, Which is 15.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhics1">abhics1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
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