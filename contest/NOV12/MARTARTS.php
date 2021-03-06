<?php require("../../includes/header.php"); ?><h1>Martial Arts</h1><div class="content">

<p>Chef somehow strayed away from kitchen and got involved in martial arts. He isn't in the right shape to get into fights but he is qualified enough to be a coach in the local gym. He's just been put in charge of organizing an upcoming tournament.</p>
<p>There will be two teams of N fighters participating in the tournament. We will refer to the Chef's team as home team. The other one will be guest team. As the organizer, Chef has to assign all fighters to N fights. One contestant from each team will take part in a fight and the judges will award certain number of points to each fighter's team according to their performance. Team's final score is equivalent to the sum of points which the contestants earned in their fights. Chef has to assign every fighter to exactly one fight.</p>
<p>Chef knows all participants very well and wants to assign pairs in such way that will maximize the difference between home and guest team's score. Let's say that home team will score H and guest team G points. Chef wants to maximize H-G. If he can do that in multiple ways, he would then like to maximize H.</p>
<p>However, he is not the only one with a hidden agenda. After the pairs are announced, guest coach can make up an excuse that one of his contestants got injured. This means that this contestant's fight won't take place and therefore won't contribute to team scores. When deciding whether to cancel some fight and which fight should that be, the guest coach has a similar goal as Chef. His primary goal is to maximize G-H and secondary to maximize G.</p>
<p>Chef is stunned by guest coach's tactic and asks for your help to organize fights optimally.</p>
<h3>Input</h3>
<p>The first line contains the number of contestants N in each team. The following N lines describe all possible pairings of contestants. j-th element in i-th line is of the form "A<sub>i,j</sub>:B<sub>i,j</sub>" which means that home team would get A<sub>i,j</sub> points and guest team B<sub>i,j</sub> points if i-th contestant from home team fights against the j-th from guest team.</p>
<h3>Output</h3>
<p>Output the number of points H scored by home team and the number of points G scored by guest team in an optimally conducted tournament. Separate them by a single space.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 100</li>
<li>0 ≤ A<sub>i,j</sub>, B<sub>i,j</sub> &lt; 10<sup>12</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
10:7 0:20 6:5
5:5 0:10 8:10
0:0 50:0 100:0

<b>Output:</b>
18 17
</pre><h3>Explanation</h3>
<p>Chef will pair contestants in the following way: (1,1), (2,3), (3,2). Coach of the guest team will cancel the last fight (3,2) which would earn home team 50 points. This way the final score is 18 points for home team and 17 points for guest team.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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