<?php require("../../includes/header.php"); ?><h1>Notorious Gunner</h1><div class="content">
<h3>Problem Statement:</h3>
<p>Chef Diablo is very good at making <i>Modaks</i>(an Indian sweet). He also loves to eat them. He makes many <i>Modaks</i> everyday and delivers it to various customers. Today he has done the same, but 1 <i>Modak</i> went unsold. He was very happy seeing this as he could have it. Before having it he decided to go and wash his hands(he takes a long time to wash his hands...:P). In the mean while Chef Gunner enters his shop. He is a very good friend of Chef Diablo. He sees the <i>Modak</i> in the plate and decides to hide it so that Chef Diablo finds some difficulty in finding the <i>Modak</i>. So he makes a n*m matrix of boxes and hides the <i>Modak</i> in one of the boxes. The number of boxes can be very large i.e., 1&lt;=n,m&lt;=10^19. As they are good friends and Chef Gunner does not want to put their friendship in danger he leaves clues in every box that mention the direction, i.e. if Chef Diablo opens any box he can see where the <i>Modak</i> is placed relative to that box.</p>
<p>Total 8 types of clues can be present:</p>
<p><ol>
<li> Exactly Above it </li>
<li> Exactly Below it </li>
<li> Exactly To the Right </li>
<li> Exactly To the Left </li>
<li> In the Top Right Region </li>
<li> In the Bottom Right Region </li>
<li> In the Top Left Region </li>
<li> In the Bottom Left Region </li>
</ol>
</p>
<p>
After he sets this up, Chef Diablo enters and sees a large number of boxes with a note saying:
</p>
<p>
<i>Modak</i> in one of the Boxes...find it if u can...HAHAHAHA...:P
</p>
<p>
-V. Gunner.
</p>
<p>
Seeing the number of boxes he turns to you for help. Please tell him the minimum number of boxes he would have to open in the worst case scenario to infer the position of the box that contains <i>Modak</i>.
</p>
<h3>
Input:<br />
</h3>
<p>
First line of input contains t the number of test-cases. Then t lines follow each having 2 space separated numbers indicating the values of n and m respectively.
</p>
<h3>
Output:<br />
</h3>
<p>
Output t lines, each line indicating the answer to the above query.
</p>
<h3>
Constraints:<br />
</h3>
<p>1&lt;=t&lt;=10^5</p>
<p>1&lt;=n,m&lt;=10^19</p>
<h3>
Sample Input:<br />
</h3>
<p>2</p>
<p>2 2</p>
<p>3 3</p>
<h3>
Sample Output:<br />
</h3>
<p>1</p>
<p>1</p>
<h3>WARNING: LARGE INPUT FILES....PLS USE FASTER I/O METHODS!!!!</h3>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aadesh_99">aadesh_99</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2014</td>
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