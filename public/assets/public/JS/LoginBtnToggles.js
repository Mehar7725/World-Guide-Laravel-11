function toggleTab(tab) {
  const signInTab = document.getElementById("signInTab");
  const signUpTab = document.getElementById("signUpTab");
  const signInForm = document.getElementById("signInForm");
  const signUpForm = document.getElementById("signUpForm");

  if (tab === "signIn") {
    signInTab.classList.add("bg-[#fff]");
    signInTab.classList.remove("!text-[#fff]");
    signInTab.classList.add("!text-[#42a7df]");
    signUpTab.classList.remove("!text-[#42a7df]");
    signUpTab.classList.add("!text-[#fff]");
    signUpTab.classList.remove("bg-[#fff]");

    signInForm.classList.remove("hidden");
    signUpForm.classList.add("hidden");
  } else {
    signUpTab.classList.add("bg-[#fff]");
    signInTab.classList.remove("!text-[#42a7df]");
    signInTab.classList.add("!text-[#fff]");
    signUpTab.classList.remove("!text-[#fff]");
    signUpTab.classList.add("!text-[#42a7df]");
    signInTab.classList.remove("bg-[#fff]");

    signUpForm.classList.remove("hidden");
    signInForm.classList.add("hidden");
  }
}
