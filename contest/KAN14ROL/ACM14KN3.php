<?php require("../../includes/header.php"); ?><h1>Logging in the computer</h1><div class="content">
<p>
Finally the LazyProblemSetters have decided the way in which they will attempt the questions in the problem set. They have decided to go to the Computer Lab of the CSE department (because it has air-conditioning) and are ready to get their hands dirty with some WA's and TLE's.
</p>
<p>
Their department has a very unique lab. They have a lot of computers and each student gets a private account which they can access through any of those computers. For this, no data is stored on these computers but on dedicated servers and sent to the computer that a student is currently using. This way the students are not forced to sit on particular computers and can choose any place they like that is available.
</p>
<p>
Now, the department has a home built advanced facial recognition software which they use in this lab. It works as follows:<br />When anyone sits on a computer, his/her picture is captured, (along with the locality) and sent to the internal database of the lab where they identify the user associated with that picture, and the computer he/she is sitting. After that the data of that user is fetched from the dedicated data servers and sent to the computer.
</p>
<p>
Now, all this takes time, and to keep the user busy, they decided to give them a puzzle to solve. If the user solves the puzzle correctly, they are allowed to login. The puzzle is as follows:<br />
<br /></p>
<ul>
<li> A string <b>S</b> (composed of only small case letters of the English alphabet) is shown on the screen to the user.</li>
<li> Then two integers <b>P</b> and <b>Q</b> are shown to the users. </li>
<li> The user has now to create a string <b>R</b> using <b>S</b> and <b>P</b> by concatenating <b>P</b> copies of <b>S</b> one after another.<br />
Then <b>R</b> is transformed into its smallest lexicographic permutation i.e. all the "a"'s are brought to the front and placed there, then after that all the "b"'s are placed, then "c"'s and so on. This is the final <b>R</b> that the user needs to form.</li>
<li> Then <b>Q</b> numbers appear on the screen one by one. For each number <b>N</b> that appears on the screen, the user has to type the character at the <b>N<sup>th</sup></b> location of <b>R</b>. If <b>N</b> is greater than the length of <b>R</b>, they have to type "-1" (without quotes).</li>
</ul>

<h3>Input</h3>
<p>The first line consists of an integer <b>T</b>, the number of test cases followed by the test cases themselves. <br /><br />
Each test case begins with the string <b>S</b> in the first line, followed by two space-separated integers <b>P</b> and <b>Q</b> in the next line. <br /><br />
Then <b>Q</b> lines follow, each containing an integer <b>N</b>.
</p>
<h3>Output</h3>
<p>For each test case, for each integer <b>N</b>, print in a new line the character at the <b>N<sup>th</sup></b> location of <b>R</b>  or print "-1" (without quotes) as described above. </p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>P</b> ≤ <b>10<sup>7</sup></b> </li>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b> </li>
<li> <b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>1</b> ≤ <b>|S|</b> ≤ <b>100</b>, where |S| denotes the length of the string. </li>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
abcde
3 5
3
4
10
15
16

<b>Output:</b>
a
b
d
e
-1
</pre><p>
<b>Note: Large I/O, be careful with certain languages</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>