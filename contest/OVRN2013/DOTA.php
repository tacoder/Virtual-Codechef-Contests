<?php require("../../includes/header.php"); ?><h1>DOTA</h1><div class="content">

<p><b>Problem Statement</b></p>
<p>One of the most popular games played in bitotsav gaming events is DOTA. Ezalor, Keeper of the Light is a great dota hero, but playing this hero needs good codediction and he needs you to help him with this.</p>
<p>Ezalor has a powerful spell called illuminate, which attacks all the hero dealing them a lot damage in a straight line. The guy playing this hero has decided to cast illuminate only in direction parallel to axes of the rectangular dota map.</p>
<p>Think of dota map as a rectangular gird of rows and columns(1&lt;=R&lt;=40, 1&lt;=C&lt;=40).Each cell in the map consists either an ally or an enemy. The spell of ezalor is 1 unit wide and he can control the length of the spell. Each 'illuminate' spell can be cast only alligned parallel to one of the sides of the map.</p>
<p>Ezalor doesnt want to affect the game of other ally heros so he would always make sure that his spell is not casted on the cell of any ally. Ezalor wishes to minimize the number of spells he has to cast, so that every enemy is hit atleast once, an enemy can be hit with the spell more than once. </p>
<p>You have to compute the minimum no of spells required.</p>
<p><b>Input Specification</b></p>
<ul>
<li>t number of the test cases.</li>
<li>Each test case begins with a line containing two space separated intergers R and C, then R lines follows.</li>
<li>each line has a string of C characters with '*' recodesenting an enemy and '.' recodesenting an ally.</li>
</ul>
<p></p>
<p><b>Output Specification</b></p>
<ul>
<li>For each test case output a single line containing an integer recodesenting the number of spells Ezalor needs.</li>
</ul>
<p></p>
<p><b>Sample Input</b></p>
<p><code><br />
2</code></p>
<p>3 4</p>
<p>****</p>
<p>*.*.</p>
<p>*.**</p>
<p>4 2</p>
<p>*.</p>
<p>*.</p>
<p>.*</p>
<p>.*</p>
<p></p>
<p></p>
<p><b>Sample Output</b></p>
<p><code><br />
4</code></p>
<p>2</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/transcendence">transcendence</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>