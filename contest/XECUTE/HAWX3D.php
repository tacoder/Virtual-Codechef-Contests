<?php require("../../includes/header.php"); ?><h1>HAWX</h1><div class="content">

<pre>
Pilot styrofox was sent on a mission to enemy territory. He is flying in a bomber plane.

<b>Captain Dinesh</b>: Hello styrofox! You got a new task.

<b>Pilot Styrofox</b>   : Yeah! Am waiting for that..

<b>Captain Dinesh</b>: Few enemy tankers has arrived. You need to take them
                               before they attack your squadron.

<b>Pilot Styrofox</b>   : Oh! this must be a simple one.

<b>Captain Dinesh</b>: Not as you think you've got only limited bombs.
		 	       More tankers are expected to arrive so use just one.

<b>Pilot Styrofox</b>   : Give me a second. I'll finish it off..

<b>Captain Dinesh</b>: Just wait. Since it is possible for you to be locked
                               by enemies, just make your shot from xd,yd,zd which is 
                               closest safe point.

<b>Pilot Styrofox</b>   : Anything more ?

<b>Captain Dinesh</b>: That's it for now. Give your best shot.
    			      Go! Go! Go! 

<b>Pilot Styrofox</b>   : Copied that!!
</pre><p>
The bomb being dropped kills any life around 50km where it explodes.<br />
The damage it makes on the tanker is inversely proportional to the<br />
square of distance between tanker and the point of explosion.<br />
Now your task is to compute the speed with which the bomb must be dropped<br />
at the point xd,yd,zd such that no tanker remains better than rest in the group and to damage severely. As the pilot doesn't<br />
want to take risk he flies the plane towards the direction of his interest<br />
for this task through the point xd,yd,zd without lowering the altitude.
</p>
<h3>Input</h3>
<p>First line contains T, No.of test case. For each test case, the first line contains<br />
three integers xd,yd and zd separated by a single space.Second line contains an integer N,<br />
which is the number of tankers.Following N line contains two integer xi,yi separated by a<br />
single space denoting the position of ith tanker in the ground. Test cases are separated by<br />
a new line.
</p>
<p><b>constraints:</b></p>
<pre>
All coordinate given are scaled in kilometers from the reference point 0,0,0.
T&lt;=10
1&lt;=N&lt;=10
0&lt;=xi,yi,zi&lt;=1000
acceleration due to gravity 9.8 m/s<sup>2</sup>
</pre><h3>Output</h3>
<p>For each test print the speed to be attained by the pilot in km/hr correct upto 3 decimal<br />
place separated by a new line.Incase if it is not possible to take all the tankers just<br />
print "NEGATIVE" instead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
8 9 10
2
0 0
0 110

8 9 10
3
0 0
0 3
1 1


<b>Output:</b>
NEGATIVE
873.862461
</pre><p>
<b>Explanation:</b>
</p>
<p>Case 1:<br />
Since the blast radius is limited to 50km, it cannot take both tankers at a time.</p>
<p>Case 2:<br />
The bomb will be dropped at 0,1.5 to damage the tankers at 0,0 and 0,3 equally. The one at 1,1 is still closer to point of explosion and hence no tanker remains better than the rest in the group.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/styrofox">styrofox</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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