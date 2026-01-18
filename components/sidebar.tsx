"use client"

import { useState } from "react"
import Link from "next/link"
import { usePathname } from "next/navigation"
import {
  LayoutDashboard,
  Calendar,
  Gavel,
  FolderOpen,
  Users,
  FileText,
  BookOpen,
  Link as LinkIcon,
} from "lucide-react"
import { cn } from "@/lib/utils"

const navigation = [
  { name: "Dashboard", href: "/", icon: LayoutDashboard },
  { name: "Calendar", href: "/calendar", icon: Calendar },
  { name: "Hearings", href: "/hearings", icon: Gavel },
  { name: "Cases", href: "/cases", icon: FolderOpen },
  { name: "Clients", href: "/clients", icon: Users },
  { name: "Notes & Tasks", href: "/notes", icon: FileText },
  { name: "Documents", href: "/documents", icon: FileText },
  { name: "Legal Books", href: "/legal-books", icon: BookOpen },
  { name: "Useful Links", href: "/links", icon: LinkIcon },
]

export function Sidebar() {
  const pathname = usePathname()

  return (
    <div className="flex h-screen w-64 flex-col bg-[#223040] text-[#d0d0d0]">
      {/* Logo Section */}
      <div className="flex items-center gap-3 px-6 py-6">
        <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]">
          <Gavel className="h-6 w-6 text-white" />
        </div>
        <div className="flex flex-col">
          <span className="text-lg font-bold text-white">Lawyer Diary</span>
          <span className="text-xs text-[#94a3b8]">DIGITAL MANAGEMENT</span>
        </div>
      </div>

      {/* Navigation */}
      <nav className="flex-1 space-y-1 px-3">
        {navigation.map((item) => {
          const isActive = pathname === item.href || 
            (item.href !== "/" && pathname?.startsWith(item.href))
          
          return (
            <Link
              key={item.name}
              href={item.href}
              className={cn(
                "group relative flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-colors",
                isActive
                  ? "bg-[#2c3b4d] text-white"
                  : "text-[#d0d0d0] hover:bg-[#2c3b4d]/50 hover:text-white"
              )}
            >
              {isActive && (
                <div className="absolute left-0 top-1/2 h-8 w-1 -translate-y-1/2 rounded-r-full bg-[#4338ca]" />
              )}
              <div
                className={cn(
                  "flex h-9 w-9 items-center justify-center rounded-md transition-colors",
                  isActive
                    ? "bg-[#4338ca]/20 text-[#6366f1]"
                    : "text-[#94a3b8] group-hover:text-[#d0d0d0]"
                )}
              >
                <item.icon className="h-5 w-5" />
              </div>
              <span>{item.name}</span>
            </Link>
          )
        })}
      </nav>
    </div>
  )
}
