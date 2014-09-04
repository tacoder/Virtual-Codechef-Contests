<?php require("../../includes/header.php"); ?><h1>Awesome Threesome</h1><div class="content">
<p>Godi and Abhik are two good friends. But then the day of Department elections came. They both knew that no one in the department is as jobless as they are to contest for the post of Secretary. They had specific set of skills with which they developed closed friends group for the past three years. People belonging to that group socialize with each other so they knew each other well. But when they both decided to go apart, the group split into two parts. And thereafter, no one from a group communicates with anyone from the opposite.<br />

</p>
<p>
The department also has a set of students (say S) who don't mingle well with either of the groups. This is mainly because even though they like Godi or Abhik they don't want to mingle with <b>everyone</b> else in the respective groups. Godi and Abhik used their campaigning skills to attract as much crowd as possible from that set S. (They even supplied food to the student's door steps). Eshwar as greedy as always, thinks that if he pretends to support both Abhik and Godi, he can gain more. He has his own followers including Pradeep.<br />

</p>
<p>
Subbu, the current secretary is tired of the cheap tricks played by the students belonging to the set S. He decides to conduct the elections as fairly as possible. So, he declares that "If and only if students belonging to the set S plan to support at-most one candidate, the elections can proceed". Obviously, he din't mean that all the students from the set S must support the same group. To check this, he prepares the list of connections between the students (by their ids). If a student is connected to a candidate (directly or indirectly) this implies he/she supports that candidate. But he later forgets the names of the students and just remembers the ids and the list of connections. So, he just checks whether he can construct a network where there is no one like Eshwar (who supports both the candidates) present in the final network. Some students like Spandana may be busy studying that they don't even know the elections are going on. Also there may be the case that no one is in the set S.  Subbu is perfectly fine with all these situations.<br />

</p>
<p>Now, Abhik and Godi are worried whether the elections will proceed or not. They seek your help, so that they can continue campaigning. Output "YES" if the elections will proceed, else print "NO".<br />
<br />
</p>
<p>
<b>Note</b> that students from set S can support a candidate by connecting with at-least one of the students belonging to the closed group of that candidate(incl. the candidate itself). And also sometimes either Godi or Abhik or both can go missing from the list of connections. In that case we can assume that their closed group will also be missing. But it is not assured that they will have non-empty friends group if they are present. Hence, if either or both the candidates are missing then we can safely assume that elections can proceed(what a irony!)
</p>

<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N, M</b>. <b>N</b> denotes the number of students in the department and <b>M</b> denotes the number connections between them in the list prepared by Subbu. Then <b>M</b> lines follow. the ith line describes the ith connection. It contains two space separated integers u and v (u != v). u and v denotes the id of the students and they are 1-indexed.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output "YES" if elections can proceed else output "NO".(Quotes for clarity. Do not print them)</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N*(N-1)/2</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
2 0

2 1
1 2

5 2
1 4
2 3

5 5
1 4
3 5
2 1
4 2
2 5

5 3
1 2
2 3
4 5

<b>Output:</b>
YES
YES
YES
NO
YES
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
No one is connected. There can't be anyone like Eshwar planning to do the cheap trick.
</p>
<p><b>Example case 2.</b><br />
Student 1 is connected to Student 2. Subbu can consider this a perfect network by assuming Student 1 as Abhik and Student 2 to be his friend. Or the same with Godi. He can also assume Student 1 is Abhik/Godi and Student 2 is from set S.</p>
<p><br /><br /></p>
<p><b> Warning </b> Input text files contains large I/O. Consider using faster I/O techniques.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-01-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>